<?= $this->include('Views/templates_admin/head') ?>

<body data-sidebar="dark">

    <div id="layout-wrapper">

        <?= $this->include('Views/templates_admin/navbar') ?>

        <?= $this->include('Views/templates_admin/sidebar') ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18"><i class="mdi mdi-account-multiple-plus"></i> Form Edit Admin</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Edit Admin</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <form action="<?php echo base_url('admin/updateadmin/' . $admin->id) ?>" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="row">
                                                <input type="hidden" name="id_admin" value="<?= $admin->id_admin ?>" />
                                                <div class="col-4">
                                                    <input type="hidden" name="sampulLama" value="<?= $admin->upload_logo ?>" />
                                                    <input type="file" name="sampul" class="dropify" data-default-file="/img/<?= $admin->upload_logo ?>" data-height="200">
                                                </div>
                                                <div class="col-8">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <span>ID Admin : </span>
                                                        </div>
                                                        <div class="col-9">
                                                            <p><?= $admin->id_admin ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <span>Username : </span>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" readonly class="form-control" value="<?= $admin->username ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <span>Address : </span>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" name="addressadmin" class="form-control" value="<?= $admin->alamat ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <span>Email : </span>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="email" name="emailadmin" class="form-control" value="<?= $admin->email ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <span>Status : </span>
                                                        </div>
                                                        <div class="col-9">
                                                            <p id="edit_status"></p>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" value="AKTIF" name="statusadmin" class="custom-control-input" <?= $admin->Status == "AKTIF" ? "checked" : ""; ?>>
                                                                <label class="custom-control-label" for="customRadio1">Aktif</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" value="NON AKTIF" name="statusadmin" class="custom-control-input" <?= $admin->Status == "NON AKTIF" ? "checked" : ""; ?>>
                                                                <label class="custom-control-label" for="customRadio2">Non Aktif</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <button type="submit" class="btn btn-primary">Update Admin</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('Views/templates_admin/footer') ?>
    </div>
    </div>
    <?= $this->include('Views/templates_admin/jquery') ?>

</body>

</html>