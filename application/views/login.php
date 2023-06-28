<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?> ">
    <title>Applikasi Aradu</title>

    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="<?= base_url('dist/css/style.min.css') ?>" rel="stylesheet">

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f724858d1a.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Custom CSS -->

</head>

<body>
    <script>
        <?= $this->session->flashdata('messageAlert') ?>
    </script>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-4 col-md-4 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <img class="mr-2" src="<?= base_url('assets/images/logo_icon.png') ?>" alt="" height="18">
                            <img src="<?= base_url('assets/images/logo_text.png') ?>" alt="" height="18">
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="text-center mt-2 mb-4">
                                    <h3 class="font-weight-bold">- Selamat Datang -</h3>
                                </div>
                                <form class="pl-3 pr-3" action="<?= base_url('login/auth') ?>" method="post">
                                    <div class="form-group">
                                        <label for="username" class="font-weight-bold">username</label>
                                        <input class="form-control" type="text" id="username" name="username" required="" placeholder="Enter your username">
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="font-weight-bold">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group text-center mt-4">
                                        <button class="btn btn-primary btn-block" type="submit">Login Now</button>
                                    </div>

                                    <div class="text-center mt-4">
                                        <h4 class="font-weight-bold">Atau</h4>
                                    </div>

                                    <a class="btn btn-danger btn-block" href="#">
                                        <i class="fab fa-google-plus-g"></i> Login By Google
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>

    <!-- End Page -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

    <!-- apps -->
    <script src="<?= base_url('dist/js/app-style-switcher.js') ?>"></script>
    <script src="<?= base_url('dist/js/feather.min.js') ?>"></script>

    <!--Custom JavaScript -->
    <script src="<?= base_url('dist/js/custom.min.js') ?>"></script>


    <!-- End JS -->
</body>

</html>