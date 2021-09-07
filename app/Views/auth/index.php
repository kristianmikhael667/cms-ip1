<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | PT. Citra Agung Mestika</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/proxy/easWHFim7qkp95Kp7hjmd468u3vs0eI9BsvOmWBMyjupQ-0nmaMqWT89HkCP82CXp_gEuspVZoFLlVGbPwDh_9Sw-Xpk3F74T1F6F12ZCBM2">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('/assets/css/app.min.css') ?>" rel="stylesheet" type="text/css" />

</head>

<body style="background-color: #ea7a26;">
    <div class="account-pages my-1 pt-sm-5">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-2">
                        <a href="index.html" class="logo"><img src="https://lh3.googleusercontent.com/proxy/easWHFim7qkp95Kp7hjmd468u3vs0eI9BsvOmWBMyjupQ-0nmaMqWT89HkCP82CXp_gEuspVZoFLlVGbPwDh_9Sw-Xpk3F74T1F6F12ZCBM2" height="170" width="170" alt="logo"></a>
                    </div>
                </div>
            </div> -->
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-xl-5 col-sm-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-1 text-center">Sign in to Employee </h5>
                                <h3 class="mb-5 text-center text-primary">PT. Citra Agung Mestika</h3>
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form class="form-horizontal" method="post" action="<?= base_url(); ?>/auth/login">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-custom mb-4">
                                                <p>User Name</p>
                                                <input type="text" class="form-control" name="username" placeholder="username" required>
                                            </div>

                                            <div class="form-group form-group-custom mb-4">
                                                <p>Password</p>
                                                <input type="password" class="form-control" name="password" placeholder="******" required>
                                            </div>


                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>