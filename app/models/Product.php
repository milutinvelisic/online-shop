<?php

namespace app\models;

class Product
{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getAll() {
        return $this->database->executeGet("select * from products");
    }

    public function getAllSizes() {
        return $this->database->executeGet("select * from sizes");
    }

    public function getAllProductsWithAllnfo() {
        return $this->database->executeGet("select * from products p inner join images i 
                                                    on p.idProduct = i.idProduct inner join product_category pc 
                                                    on p.idProductCat = pc.idProductCat  inner join `in-stock` ic
                                                    on p.idProduct = ic.idProduct");
    }

    public function getAllProductsWithAllnfoGrouped() {
        return $this->database->executeGet("select *, pc.productCatName as CategoryName, b.brandName as BrandName, g.genderName as GenderName  from products p inner join images i 
                                                    on p.idProduct = i.idProduct inner join product_category pc 
                                                    on p.idProductCat = pc.idProductCat  inner join `in-stock` ic
                                                    on p.idProduct = ic.idProduct inner join brands b
                                                    on p.idBrand = b.idBrand inner join gender g
                                                    on p.idGender = g.idGender
                                                    group by p.idProduct");
    }

    public function insertProduct($productName, $description, $productPrice, $cat, $gender, $brands, $sizes, $quantity, $productPicture){

        $params = [
            $productName,
            $description,
            $productPrice,
            $cat,
            $gender,
            $brands
        ];
        try{
            $insert = $this->database->conn->prepare("INSERT into products values(null,?, ?, ?, ?, ?, ?)");
            $res = $insert->execute($params);
            if($res){
                $productId= $this->database->conn->lastInsertId();
                $params2 = [
                    $productId,
                    $sizes,
                    $quantity
                ];
                $insert2 = $this->database->conn->prepare("insert into `in-stock` values(null,?, ?, ?)");
                $res2 = $insert2->execute($params2);
                if($res2){

                    $errors = [];
                    $pictureName = $productPicture["name"];
                    $picturetmp = $productPicture["tmp_name"];
                    $picturetype = $productPicture["type"];
                    $picturesize = $productPicture["size"];

                    $allowedTypes = ['image/jpg', 'image/jpeg', 'image/png'];

                    if ($picturesize > 123000000) {
                        array_push($errors, "Maksimalna velicina fajla je 3MB!");
                    }

                    if (!in_array($picturetype, $allowedTypes)) {
                        array_push($errors, "Pogresan tip fajla!");
                    }

//                    if (count($errors) == 0){
//                        list($sirina, $visina) = getimagesize($picturetmp);
//
//                        $postojecaSlika = null;
//
//
//                        if ($picturetype == "image/jpeg") {
//
//                            $postojecaSlika = imagecreatefromjpeg($picturetmp);
//                        } else if ($picturetype == "image/png") {
//
//                            $postojecaSlika = imagecreatefrompng($picturetmp);
//                        }
//
//                        $picturebigwidth = 845;
//                        $picturebigheight = 990;
//
//
//                        $newpicturebig = imagecreatetruecolor($picturebigwidth, $picturebigheight);
//
//                        imagecopyresampled($newpicturebig, $postojecaSlika, 0, 0, 0, 0, $picturebigwidth, $picturebigheight, $sirina, $visina);
//
//                        $newpicturenamebig = $_POST['$productName'];
//
//                        if ($picturetype == "image/jpeg") {
//                            imagejpeg($newpicturebig, '../../public/img/' . $newpicturenamebig . '.jpg');
//
//                            $newpicturenamebig = $newpicturenamebig . '.jpg';
//
//                        } else if ($picturetype == "image/png") {
//                            imagepng($newpicturebig, '../../public/img/' . $newpicturenamebig . '.png');
//
//                            $newpicturenamebig = $newpicturenamebig . '.png';
//
//                        }
//
//                        $picturetmp1 = $picturetmp;
//                        $picturetmp2 = $picturetmp;
//                        $picturetmp3 = $picturetmp;

                        if(move_uploaded_file($picturetmp, "public/img/".$pictureName)){
                            try {

                                $params3 = [
                                    $productId,
                                    $pictureName
                                ];
                                $insert3 = $this->database->conn->prepare("insert into images values(null, ?, null, null, ?)");
                                $res3 = $insert3->execute($params3);
                                if ($res3) {
                                    return true;
                                } else {
                                    array_push($errors, "Nije prosao insert u tabelu images!");
                                    echo json_encode($errors);
                                }
                            } catch (PDOException $ex) {
                                echo $ex->getMessage();
                                array_push($errors, "Pukao je upit!");
                                echo json_encode($errors);
                            }
                        }else{
                            array_push($errors, "Slika nije ubacena na server!");
                            echo json_encode($errors);
                        }
//                    }

                }else{
                    array_push($errors, "Nije prosao insert u tabelu in-stock!");
                    echo json_encode($errors);
                }
            }
            else{
               http_response_code(403);
                array_push($errors, "Nije prosao prvi upit");
                echo json_encode($errors);
            }

        }catch (\PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function getOneProduct($id){
        return $this->database->executeNonGet("select *, sum(ic.quantity) as result from products p inner join images i 
                                                    on p.idProduct = i.idProduct inner join product_category pc 
                                                    on p.idProductCat = pc.idProductCat  inner join `in-stock` ic
                                                    on p.idProduct = ic.idProduct where p.idProduct = ?", [$id]);
    }

    public function deleteProduct($idProduct){
        return $this->database->deleteSomething("delete from products where idProduct = ?", $idProduct);
    }
}