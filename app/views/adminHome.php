<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Dashboard</h2>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Users Logged</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['activeUsers'][0]->countUsers ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Admins Logged</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['activeAdmins'][0]->countAdmins ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">All Users Number</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['allUsers'][0]->countAll ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">All Admins Number</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['allAdmins'][0]->countAllAdmins ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Visited index page</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['loggedPages'][0] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Visited shop page</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['loggedPages'][1] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Visited contact page</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['loggedPages'][2] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Visited checkout page</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['loggedPages'][3] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Visited login page</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['loggedPages'][4] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header text-center">Visited register page</h5>
                    <div class="card-body">
                        <div class="metric-value d-inline-block text-center">
                            <h1 class="mb-1"><?= $data['loggedPages'][5] ?></h1>
                        </div>
                    </div>
                </div>
            </div>

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
