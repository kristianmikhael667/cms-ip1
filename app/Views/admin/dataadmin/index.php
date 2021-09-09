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
                                <h4 class="mb-0 font-size-18">List Admin</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">List Admin</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($admins as $admin) :
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $admin->username ?></td>
                                                    <td><?= $admin->email ?></td>
                                                    <td><?= $admin->Status ?></td>

                                                    <td>
                                                        <a href="#" onclick="detailAdmin(<?= $admin->id ?>)" class="btn btn-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                        <a href="#" onclick="editAdmin(<?= $admin->id ?>)" class="btn btn-warning"><i class="mdi mdi-pencil"></i></a>
                                                        <a href="#" onclick="deleteAdmin('<?= $admin->id ?>','<?= $admin->username ?>')" class="btn btn-danger"><i class="mdi mdi-delete-empty"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Khusus Modal -->
        <?= $this->include('Views/admin/dataadmin/modal_admin') ?>
        <?= $this->include('Views/admin/dataadmin/modal_admin_edit') ?>
        <!-- Footer -->
        <?= $this->include('Views/templates_admin/footer') ?>
    </div>
    </div>

    <!-- Jquery Get Customer -->
    <?= $this->include('Views/templates_admin/getbyiddataadmin') ?>

    <?= $this->include('Views/templates_admin/jquery') ?>

</body>

</html>