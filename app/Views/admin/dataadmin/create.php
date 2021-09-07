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
                                <h4 class="mb-0 font-size-18"><i class="mdi mdi-account-multiple-plus"></i> Form Create Admin</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Create Admin</li>
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
                                        <form action="<?= base_url('/admin/store') ?>" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-5 mr-3">
                                                    <div class="row mb-3">
                                                        <label for="username" class="col-form-label">* Username</label>
                                                        <input placeholder="Input Username" type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" autofocus value="<?= old('username'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('username'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="password" class="col-form-label">* Password</label>
                                                        <input placeholder="Input Password" type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" autofocus value="<?= old('password'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('password'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="email" class="col-form-label">* Email Address</label>
                                                        <input placeholder="Input Email" type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" autofocus value="<?= old('email'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('email'); ?>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="row mb-3">
                                                        <label for="alamat" class="col-form-label">* Address</label>
                                                        <input placeholder="Input Address" type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" autofocus value="<?= old('alamat'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('alamat'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <label for="upload_logo" class="col-form-label">* Upload Logo</label>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <img src="<?= base_url('/assets/images/defaultimg.png') ?>" class="img-thumbnail img-preview">
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="mb-3">
                                                                    <input class="form-control <?= ($validation->hasError('upload_logo')) ? 'is-invalid' : ''; ?>" type="file" name="upload_logo" id="upload_logo" multiple onchange="previewImg()">
                                                                    <div class="invalid-feedback">
                                                                        <?= $validation->getError('upload_logo'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <label hidden for="upload_logo" class="custom-file-label">Pilih Gambar..</label>

                                                        </div>
                                                        <script>
                                                            function previewImg() {
                                                                console.log('masuk');
                                                                const sampul = document.querySelector('#upload_logo');
                                                                const sampulLabel = document.querySelector('.custom-file-label');
                                                                const imgPreview = document.querySelector('.img-preview');

                                                                sampulLabel.textContent = sampul.files[0].name;

                                                                const fileSampul = new FileReader();
                                                                fileSampul.readAsDataURL(sampul.files[0]);

                                                                fileSampul.onload = function(e) {
                                                                    imgPreview.src = e.target.result;
                                                                }
                                                            }
                                                        </script>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="mt-4 mt-sm-0">
                                                            <h5 class="font-size-14 mb-3">* Status</h5>
                                                            <div class="custom-control custom-radio mb-2 mr-2">
                                                                <input type="radio" id="customRadio1" name="status" value="AKTIF" class="custom-control-input" checked required>
                                                                <label class="custom-control-label" for="customRadio1">Aktif</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="status" value="NONAKTIF" class="custom-control-input" required>
                                                                <label class="custom-control-label" for="customRadio2">Non Aktif</label>
                                                            </div>
                                                            <?= $validation->getError('status'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <button type="submit" class="btn btn-primary">Create Admin</button>
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