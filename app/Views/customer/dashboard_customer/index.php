<?= $this->include('Views/templates_customer/head') ?>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Navbar -->
        <?= $this->include('Views/templates_customer/navbar') ?>

        <?= $this->include('Views/templates_customer/sidebar') ?>

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