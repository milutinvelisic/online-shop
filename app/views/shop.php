<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>Home / Category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_padding border_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">

                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Gender</h3>
                        </div>
                        <div class="widgets_inner">
                            <form action="#" method="POST" id="gender">
                            <ul class="list" >
                                <?php
                                foreach ($data['gender'] as $gen){
                                    echo "<li>
                                            <input type='checkbox' class='gender' data-id='$gen->idGender' name='gender' value='$gen->idGender'>$gen->genderName
                                          </li>";
                                }
                                ?>
                            </ul>
                            </form>
                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <form action="#" method="POST" id="categories">
                                <ul class="list">
                                    <?php
                                        foreach ($data['categories'] as $cat){
                                            echo "<li>
                                                    <input type='checkbox' class='categories' name='$cat->productCatName' value='$cat->idProductCat'>$cat->productCatName
                                                  </li>";
                                        }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Brands</h3>
                        </div>
                        <div class="widgets_inner">
                            <form action="#" method="POST" id="brands">
                                <ul class="list">
                                    <?php
                                    foreach ($data['brands'] as $br){
                                        echo "<li>
                                                <input type='checkbox' class='brands' name='$br->brandName' value='$br->idBrand'>$br->brandName
                                              </li>";
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </aside>


                </div>
            </div>
            <div class="col-lg-9">
                <div class="row" id="products">
                    <?php

                    foreach ($data['someProducts'] as $p):

                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <a href="index.php?page=product&id=<?= $p->idProduct ?>">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="public/img/<?= $p->imageLarge ?>" alt="<?= $p->productName ?>">

                                <div class="category_product_text">

                                        <h5><?= $p->productName ?></h5>

                                    <p>$<?= $p->productPrice ?>.00</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <?php

                    endforeach;

                    ?>

<!--                    <div class="col-lg-12 text-center">-->
<!--                        <a href="#" class="btn_2">More Items</a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->

<!-- free shipping here -->
<section class="shipping_details section_padding border_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="public/img/icon/icon_1.png" alt="">
                    <h4>Free shipping</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="public/img/icon/icon_2.png" alt="">
                    <h4>Free shipping</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="public/img/icon/icon_3.png" alt="">
                    <h4>Free shipping</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="public/img/icon/icon_4.png" alt="">
                    <h4>Free shipping</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- free shipping end -->

<!-- subscribe_area part start-->
<section class="instagram_photo">
    <div class="container-fluid>
            <div class=" row">
        <div class="col-lg-12">
            <div class="instagram_photo_iner">
                <div class="single_instgram_photo">
                    <img src="public/img/instagram/inst_1.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="public/img/instagram/inst_2.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="public/img/instagram/inst_3.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="public/img/instagram/inst_4.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="public/img/instagram/inst_5.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--::subscribe_area part end::-->