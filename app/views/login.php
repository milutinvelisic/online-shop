<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>Home / Login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================login_part Area =================-->
<section class="login_part section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>New to our Shop?</h2>
                        <p>There are advances being made in science and technology
                            everyday, and a good example of this is the</p>
                        <a href="index.php?page=register" class="btn_3">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Welcome Back ! <br>
                            Please Sign in now</h3>

                        <?php

                        if(isset($data["errors"])) {
                            echo "<ul>";
                            foreach($data["errors"] as $e) {
                                echo "<li>". $e ."</li>";
                            }

                            echo "</ul>";
                        }

                        ?>
                        <form class="row contact_form" action="index.php?page=dologin" onSubmit="return checkLogin();" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group">

                                <button type="submit" name="btnLogin" id="btnLogin" value="submit" class="btn_3">
                                    log in
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->

<!-- subscribe_area part start-->
<section class="instagram_photo">
    <div class="container-fluid">
        <div class="row">
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