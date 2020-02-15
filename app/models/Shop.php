<?php

namespace app\models;

class Shop
{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getAllCategories() {
        return $this->database->executeGet("select * from product_category");
    }

    public function getAllBrands(){
        return $this->database->executeGet("select * from brands");
    }

    public function getAllGenders(){
        return $this->database->executeGet("select * from gender");
    }

    public function getProductsForBrandsAndGenderAndCategories($idBrand, $idGender, $idCategories){

        $query = "SELECT * from product_category pd inner join products p
                                                    on pd.idProductCat = p.idProductCat inner join images i
                                                    on p.idProduct = i.idProduct inner join gender g
                                                    on p.idGender = g.idGender inner join brands b 
                                                    on b.idBrand = p.idBrand
                                                    where true";

        $params = [];
        if(count($idBrand) > 0 && !in_array(0, $idBrand)){
            $queryPartsBrand = [];
            $query .= " and p.idBrand in (";
            for ($i = 0; $i < count($idBrand); $i++){
                $queryPartsBrand[] =  "?";
                $params[] = $idBrand[$i];
            }
            $query .= implode(",", $queryPartsBrand);
            $query .= ")";
        }

        if(count($idCategories) > 0 && !in_array(0, $idCategories)){
            $queryPartsCat = [];
            $query .= " and p.idProductCat in(";
            for ($i = 0; $i < count($idCategories); $i++){
                $queryPartsCat[] =  "?";
                $params[] = $idCategories[$i];
            }
            $query .= implode(",", $queryPartsCat);
            $query .= ")";
        }

        if(count($idGender) > 0 && !in_array(0, $idGender)){
            $queryPartsGender = [];
            $query .= " and p.idGender in(";
            for ($i = 0; $i < count($idGender); $i++){
                $queryPartsGender[] =  "?";
                $params[] = $idGender[$i];
            }
            $query .= implode(",", $queryPartsGender);
            $query .= ")";
        }

        return $this->database->executeWhere($query, $params);
    }

    public function getSomeProducts(){
        return $this->database->executeGet("SELECT * from product_category pd inner join products p
                                            on pd.idProductCat = p.idProductCat inner join images i
                                            on p.idProduct = i.idProduct ");
    }
}