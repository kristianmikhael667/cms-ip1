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
                                <h4 class="mb-0 font-size-18"><i class="mdi mdi-account-multiple-plus"></i> Form Create HOC</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">HOC</a></li>
                                        <li class="breadcrumb-item active">Create Hoc</li>
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
                                        <form action="<?= base_url('/admin/store_hoc') ?>" method="POST">
                                            <?= csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row mb-3">
                                                        <label for="username" class="col-form-label">* Name HOC</label>
                                                        <input placeholder="Input Name HOC" type="text" class="form-control <?= ($validation->hasError('name_hoc')) ? 'is-invalid' : ''; ?>" id="name_hoc" name="name_hoc" autofocus value="<?= old('name_hoc'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('name_hoc'); ?>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="col-6">
                                                    <div class="row mt-3">
                                                        <div class="ml-5">
                                                            <h5 class="font-size-14 mb-3">* Status</h5>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <div class="custom-control custom-radio mb-2 mr-1">
                                                                        <input type="radio" id="customRadio1" name="status" value="AKTIF" class="custom-control-input" checked required>
                                                                        <label class="custom-control-label" for="customRadio1">Aktif</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="customRadio2" name="status" value="NONAKTIF" class="custom-control-input" required>
                                                                        <label class="custom-control-label" for="customRadio2">Non Aktif</label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <?= $validation->getError('status'); ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <button type="submit" class="btn btn-primary">Create HOC</button>
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