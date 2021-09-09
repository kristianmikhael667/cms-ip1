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
                                <h4 class="mb-0 font-size-18">List Users</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">List Users</li>
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
                                                <th>ID User</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($users as $user) :
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $user->id_user ?></td>
                                                    <td><?= $user->username ?></td>
                                                    <td><?= $user->Status ?></td>
                                                    <td>Edit</td>
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

        <?= $this->include('Views/templates_admin/footer') ?>
    </div>
    </div>
    <?= $this->include('Views/templates_admin/jquery') ?>

</body>

</html>