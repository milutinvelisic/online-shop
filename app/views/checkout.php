<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <p>Home / checkout</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcrumb start-->

<!--================Checkout Area =================-->
<section class="checkout_area section_padding">
  <div class="container">

      <?php

        if(!isset($_SESSION['user'])):

      ?>

    <div class="returning_customer">
      <div class="check_title">
        <h2>
          You have to be logged in to continue!
          <a href="index.php?page=login">Click here to login</a>
        </h2>
      </div>

    </div>

      <?php

       else:

      ?>

    <div class="billing_details">
      <div class="row">
        <div class="col-lg-12" id="orderList">
        </div>
      </div>
    </div>
      <?php

       endif;

      ?>
  </div>
</section>
<!--================End Checkout Area =================-->

<!-- subscribe_area part start-->
<section class="instagram_photo">
  <div class="container-fluid>
          <div class=" row">
    <div class="col-lg-12">
      <div class="instagram_photo_iner">
        <div class="single_instgram_photo">
          <img src="img/instagram/inst_1.png" alt="">
          <a href="#"><i class="ti-instagram"></i></a>
        </div>
        <div class="single_instgram_photo">
          <img src="img/instagram/inst_2.png" alt="">
          <a href="#"><i class="ti-instagram"></i></a>
        </div>
        <div class="single_instgram_photo">
          <img src="img/instagram/inst_3.png" alt="">
          <a href="#"><i class="ti-instagram"></i></a>
        </div>
        <div class="single_instgram_photo">
          <img src="img/instagram/inst_4.png" alt="">
          <a href="#"><i class="ti-instagram"></i></a>
        </div>
        <div class="single_instgram_photo">
          <img src="img/instagram/inst_5.png" alt="">
          <a href="#"><i class="ti-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--::subscribe_area part end::-->