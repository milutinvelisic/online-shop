<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Products Dashboard</h2>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Basic Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>idProduct</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Gender</th>
                                    <th>Brand</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody id="generateProductTable">
                                <?php

                                foreach ($data['products'] as $k => $v):

                                    ?>
                                    <tr>
                                        <td><?= $v->idProduct ?></td>
                                        <td><?= $v->productName ?></td>
                                        <td><?= $v->productDescription ?></td>
                                        <td><?= $v->productPrice ?>.00$</td>
                                        <td><?= $v->CategoryName ?></td>
                                        <td><?= $v->GenderName ?></td>
                                        <td><?= $v->BrandName ?></td>
                                        <td><a href="#" class="deleteProduct" data-id="<?= $v->idProduct ?>"><i class="fa fa-close pl-3"></i></a></td>
                                    </tr>
                                <?php

                                endforeach;

                                ?>
                                <tfoot>
                                <tr>
                                    <th>idProduct</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Gender</th>
                                    <th>Brand</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title text-center">Insert Product</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="row contact_form" action="#" method="post" id="insertProduct" enctype="multipart/form-data">
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="productName" name="productName" value="" placeholder="Product Name">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="description" name="description" value="" placeholder="Description">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="productPrice" name="productPrice" value="" placeholder="Product Price">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <select class="form-control" id="cat">

                        <option value="0">Choose Product Category</option>
                        <?php
                            foreach ($data['cat'] as $p):
                        ?>
                        <option value="<?= $p->idProductCat ?>"><?= $p->productCatName ?></option>
                        <?php

                        endforeach;

                        ?>
                    </select>
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <select class="form-control" id="gender">

                        <option value="0">Choose Gender Category</option>
                        <?php
                        foreach ($data['gender'] as $p):
                            ?>
                            <option value="<?= $p->idGender ?>"><?= $p->genderName ?></option>
                        <?php

                        endforeach;

                        ?>
                    </select>
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <select class="form-control" id="brands">

                        <option value="0">Choose Brands Category</option>
                        <?php
                        foreach ($data['brands'] as $p):
                            ?>
                            <option value="<?= $p->idBrand ?>"><?= $p->brandName ?></option>
                        <?php

                        endforeach;

                        ?>
                    </select>
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <select class="form-control" id="sizes">

                        <option value="0">Choose Size Category</option>
                        <?php
                        foreach ($data['sizes'] as $p):
                            ?>
                            <option value="<?= $p->idSize ?>"><?= $p->sizeName ?></option>
                        <?php

                        endforeach;

                        ?>
                    </select>
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="number" class="form-control" id="quantity" name="quantity" value="" placeholder="Enter Quantity">
                </div>
                <div class="form-group col-md-8 offset-2">
                    <label class="control-label">Product picture</label>
                    <input class="form-control" type="file" name="productPicture" id="productPicture">
                </div>
                <div class="col-md-8 offset-2 form-group">
                    <button type="submit" name="btnInsertProduct" id="btnInsertProduct" value="Insert" class="btn_3">
                        Insert
                    </button>

                </div>
            </form>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>