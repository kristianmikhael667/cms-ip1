<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Xoric - Responsive Bootstrap 4 Admin Dashboard | Docs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('/assets/css/app.min.css') ?>" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-light.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-backburger"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="d-inline-block">
                        <h5><span class="badge badge-danger float-right"><?= session()->get('username'); ?></span></h5>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Docs</li>

                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Page Customer</span>
                            </a>
                        </li>

                        <li>
                            <a href="setup.html" class=" waves-effect">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Setup</span>
                            </a>
                        </li>

                        <li>
                            <a href="plugins.html" class=" waves-effect">
                                <i class="mdi mdi-apps"></i>
                                <span>Plugins</span>
                            </a>
                        </li>

                        <li class="menu-title">Layouts</li>

                        <li>
                            <a href="vertical.html" class=" waves-effect">
                                <i class="mdi mdi-flip-horizontal"></i>
                                <span>Vertical</span>
                            </a>
                        </li>

                        <li>
                            <a href="horizontal.html" class=" waves-effect">
                                <i class="mdi mdi-flip-vertical"></i>
                                <span>Horizontal</span>
                            </a>
                        </li>

                        <li class="menu-title">Themes</li>

                        <li>
                            <a href="dark.html" class=" waves-effect">
                                <i class="mdi mdi-weather-night"></i>
                                <span>Dark Version</span>
                            </a>
                        </li>

                        <li>
                            <a href="rtl.html" class=" waves-effect">
                                <i class="mdi mdi-web"></i>
                                <span>RTL Version</span>
                            </a>
                        </li>

                        <li class="menu-title">Account</li>

                        <li>
                            <a href="<?= base_url(); ?>/auth/logout" class=" waves-effect">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Getting Started</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Getting Started</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="card">
                        <div class="card-body">
                            <div class="p-lg-3">
                                <h5 class="mt-0 mb-2">Introduction</h5>

                                <p>Xoric is a fully featured premium admin template built on top of awesome
                                    <strong>Bootstrap 4.4.1</strong>. It's crafted using modern web technologies
                                    <strong>HTML5, CSS3 </strong>and <strong>jQuery</strong>. The theme includes
                                    beautiful dashboard, many
                                    ready to use hand crafted components, UI elements, widgets, pages, etc. The
                                    components could
                                    be used very easily on any page. The theme is fully responsive and customizable.
                                    Apexy helps you to create your next Bootstrap even faster then before. It can be
                                    used to create a Saas based interfase, administrator dashboard or anything you want
                                    to build on the web. Apexy helps your team moving faster and saving development
                                    costs.
                                </p>
                                <p>
                                    We really care for our buyers and so in case if you are having any question or
                                    feedback, please feel free to get back to
                                    us via email <code>themesdesign.in@gmail.com</code>
                                </p>
                            </div>

                            <div class="p-lg-3">
                                <h5 class="mt-0 mb-2">Structure</h5>

                                <p>Extract the zip file you received after purchase and you would find the exact below
                                    files and folders:
                                </p>

                                <pre class="mb-0">

├── Documentation
├── Horizontal
│     ├── dist
│     ├── src/
│     │   └── fonts
│     │   └── images
│     │   └── html
│     │   └── js
│     │   └── scss
│     ├── gulpfile.js
│     ├── package.json
│     └── README.md
├── Vertical   
                                        </pre>

                            </div> <!-- end padding-->
                        </div>
                        <!--end card body-->
                    </div> <!-- end card-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 © Infinity One Plus.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('/assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/node-waves/waves.min.js') ?>"></script>

    <script src="<?= base_url('/assets/js/app.js') ?>"></script>

</body>

</html>