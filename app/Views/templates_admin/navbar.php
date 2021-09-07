<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="padding-top: 10px;">
                <a href="index.html" class="">
                    <span class="">
                        <img src="<?= base_url('/assets/images/ipo.png') ?>" alt="" height="60">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>

        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block">

                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= '/img/' . session('upload_logo') ?>" alt="Avatar Admin">
                    <span class="d-none d-sm-inline-block ml-1"><?= session()->get('username'); ?></span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url(); ?>/auth/logout"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>