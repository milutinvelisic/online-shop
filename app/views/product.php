<!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <p>Home/Shop/Single product</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="public/img/<?= $data['product']->imageLarge ?>">
                <img src="public/img/<?= $data['product']->imageLarge ?>" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3><?= $data['product']->productName ?></h3>
            <h2 id="priceBox">$<?= $data['product']->productPrice ?>.00</h2>
            <ul class="list">
              <li>
                  <span>Category</span> : <?= $data['product']->productCatName ?>
              </li>
              <li>
                  <span>Availibility</span> :
                  <?php

                    if(intval($data['product']->result) >= 0){
                        echo 'In-stock';
                    }else{
                        echo 'Unavaliable';
                    }

                  ?>
              </li>
            </ul>
            <p>
                <?= $data['product']->productDescription ?>
            </p>
            <div class="card_area">
              <div class="product_count d-inline-block">
                  <input type="hidden" name="productId" id="hiddenId" value="<?= $data['product']->idProduct ?>">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" id="quntityBox" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <div class="add_to_cart">
                  <a href="#" id="addToCart" class="btn_3">add to cart</a>
                  <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
              </div>
              <div class="social_icon">
                  <a href="#" class="fb"><i class="ti-facebook"></i></a>
                  <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                  <a href="#" class="li"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!-- product_list part start-->
  <section class="product_list best_seller padding_bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section_tittle text-center">
            <h2>Best Sellers</h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-sm-6">
              <div class="single_category_product">
                  <div class="single_category_img">
                      <img src="public/img/category/category_2.png" alt="">
                      <div class="category_social_icon">
                          <ul>
                              <li><a href="#"><i class="ti-heart"></i></a></li>
                              <li><a href="#"><i class="ti-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="category_product_text">
                          <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                          <p>$150.00</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="single_category_product">
                  <div class="single_category_img">
                      <img src="public/img/category/category_3.png" alt="">
                      <div class="category_social_icon">
                          <ul>
                              <li><a href="#"><i class="ti-heart"></i></a></li>
                              <li><a href="#"><i class="ti-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="category_product_text">
                          <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                          <p>$150.00</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="single_category_product">
                  <div class="single_category_img">
                      <img src="public/img/category/category_4.png" alt="">
                      <div class="category_social_icon">
                          <ul>
                              <li><a href="#"><i class="ti-heart"></i></a></li>
                              <li><a href="#"><i class="ti-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="category_product_text">
                          <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                          <p>$150.00</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="single_category_product">
                  <div class="single_category_img">
                      <img src="public/img/category/category_5.png" alt="">
                      <div class="category_social_icon">
                          <ul>
                              <li><a href="#"><i class="ti-heart"></i></a></li>
                              <li><a href="#"><i class="ti-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="category_product_text">
                          <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                          <p>$150.00</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- product_list part end-->

  <!-- shipping details part end-->

  <!-- shipping details part end-->

  <!-- subscribe_area part start-->
  <section class="instagram_photo">
     <div class="container-fluid">
          <div class="row">
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
