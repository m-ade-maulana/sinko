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
    <title>Aplikasi Ara</title>

    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="<?= base_url('dist/css/style.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('dist/highlights/highlight.min.css') ?>">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/f724858d1a.js" crossorigin="anonymous"></script>

    <!--Custom JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Custom CSS -->
    <style>
        nav li a,
        nav li span {
            font-size: 12px !important;
        }
    </style>
</head>

<body>
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
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="docs.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?= base_url('assets/images/logo_icon.png') ?>" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?= base_url('assets/images/logo_icon.png') ?>" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?= base_url('assets/images/logo_text.png') ?>" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?= base_url('assets/images/logo_light-text.png') ?>" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button">
                                Nama Instansi / Lembaga
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php
                        if ($level == 'admin') { ?>
                            <!-- Title menu -->
                            <!-- Menu Dashboard -->
                            <li class="nav-small-cap">
                                <span class="hide-menu">Dashboard</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false">
                                    <i class="fa fa-tachometer feather-icon"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link" href="<?= base_url('presensi') ?>" aria-expanded="false">
                                    <i class="fa fa-file-text-o feather-icon"></i>
                                    <span class="hide-menu">Presensi</span>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- List / garis -->
                        <li class="list-divider"></li>
                        <!-- End List / garis -->
                        <?php if ($level == 'TU') { ?>
                            <!-- Title menu -->
                            <!-- Menu Dashboard -->
                            <li class="nav-small-cap">
                                <span class="hide-menu">Dashboard</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false">
                                    <i class="fa fa-tachometer feather-icon"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link" href="<?= base_url('presensi') ?>" aria-expanded="false">
                                    <i class="fa fa-file-text-o feather-icon"></i>
                                    <span class="hide-menu">Presensi</span>
                                </a>
                            </li>
                            <li class="nav-small-cap">
                                <span class="hide-menu">Tata Usaha</span>
                            </li>
                            <li class="sidebar-item ">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i data-feather="grid" class="feather-icon"></i>
                                    <span class="hide-menu">Surat - Surat</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level base-level-line">
                                    <li class="sidebar-item">
                                        <a href="docs-ui-buttons.html" class="sidebar-link">
                                            <span class="hide-menu">Surat Izin</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="docs-ui-buttons.html" class="sidebar-link">
                                            <span class="hide-menu">Surat Undangan</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="docs-ui-buttons.html" class="sidebar-link">
                                            <span class="hide-menu">Surat Pengadaan Barang</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="docs-ui-buttons.html" class="sidebar-link">
                                            <span class="hide-menu">Surat Kerjasama</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="docs-ui-buttons.html" class="sidebar-link">
                                            <span class="hide-menu">Surat Proposal</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Menu TU Divisi -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i data-feather="edit" class="feather-icon"></i>
                                    <span class="hide-menu">Keuangan</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level base-level-line">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <span class="hide-menu">Tagihan Siswa </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <span class="hide-menu">Laporan Pemasukan </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <span class="hide-menu">Laporan Pengeluaran </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- List / garis -->
                            <li class="list-divider"></li>
                            <!-- End List / garis -->
                        <?php }
                        ?>

                        <!-- Menu TU Divisi -->
                        <li class="nav-small-cap">
                            <span class="hide-menu">Setting</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="<?= base_url('setting') ?>" aria-expanded="false">
                                <i class="fa fa-cogs feather-icon"></i>
                                <span class="hide-menu">Settings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="<?= base_url('login/logout') ?>" aria-expanded="false">
                                <i class="fa fa-sign-out feather-icon"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="d-flex align-items-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-0">Dashboard</h4>
                    <div class="ml-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item text-muted active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item text-muted" aria-current="page">#</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->