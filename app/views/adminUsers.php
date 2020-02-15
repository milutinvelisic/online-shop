<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Users Dashboard</h2>
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
                                    <th>idUser</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Postal Code</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody id="generateUserTable">
                                <?php

                                foreach ($data['users'] as $k => $v):

                                ?>
                                <tr>
                                    <td><?= $v->idUser ?></td>
                                    <td><?= $v->username ?></td>
                                    <td><?= $v->password ?></td>
                                    <td><?= $v->email ?></td>
                                    <td><?= $v->address ?></td>
                                    <td><?= $v->postalCode ?></td>
                                    <td><a href="#" class="deleteUser" data-id="<?= $v->idUser ?>"><i class="fa fa-close pl-3"></i></a></td>
                                </tr>
                                <?php

                                endforeach;

                                ?>
                                <tfoot>
                                <tr>
                                    <th>idUser</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Postal Code</th>
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
                <h2 class="pageheader-title text-center">Insert User</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="row contact_form" action="index.php?page=insertUser" method="post" id="insertUser">
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="password" name="password" value="" placeholder="Password">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
                <div class="col-md-8 offset-2 form-group p_star">
                    <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code">
                </div>


                <div class="col-md-8 offset-2 form-group">
                    <button type="submit" name="btnInsertUser" id="btnInsertUser" value="Insert" class="btn_3">
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