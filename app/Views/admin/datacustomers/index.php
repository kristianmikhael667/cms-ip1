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
                                <h4 class="mb-0 font-size-18">List Customers</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">List Customers</li>
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
                                                <th>ID Admin</th>
                                                <th>Username</th>
                                                <th>Name Company</th>
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($customers as $customer) :
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $customer->id_customer ?></td>
                                                    <td><?= $customer->username ?></td>
                                                    <td><?= $customer->nama_perusahaan ?></td>
                                                    <td><?= $customer->Status ?></td>
                                                    <td>
                                                        <a href="#" id="btn-detail" class="btn btn-primary" data-id="<?= $customer->id_customer; ?>"><i class="mdi mdi-eye-outline"></i></a>
                                                        <a href="#" class="btn btn-info" data-id="<?= $customer->id_customer; ?>"><i class="mdi mdi-account-circle"></i></a>
                                                        <a href="#" class="btn btn-warning" data-id="<?= $customer->id_customer; ?>"><i class="mdi mdi-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger" data-id="<?= $customer->id_customer; ?>"><i class="mdi mdi-delete-empty"></i></a>
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



        <!-- Footer -->
        <?= $this->include('Views/templates_admin/footer') ?>
    </div>
    </div>
    <!-- Khusus Modal -->
    <?= $this->include('Views/admin/datacustomers/modal_customer') ?>
    <?= $this->include('Views/templates_admin/jquery') ?>
</body>

</html>