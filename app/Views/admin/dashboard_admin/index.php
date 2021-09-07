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
                                <h4 class="mb-0 font-size-18">My Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">My Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="text-center" dir="ltr">
                                                <h4>Data Admin</h4>
                                                <input readonly data-plugin="knob" data-width="180" data-height="180" data-min="-100" data-fgColor="#00a7e1" data-displayPrevious=true data-angleOffset=-125 data-angleArc=250 value="2" />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-center" dir="ltr">
                                                <h4>Data Customer</h4>
                                                <input readonly data-plugin="knob" data-width="180" data-height="180" data-min="-100" data-fgColor="#00a7e1" data-displayPrevious=true data-angleOffset=-125 data-angleArc=250 value="7" />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-center" dir="ltr">
                                                <h4>Data User</h4>
                                                <input readonly data-plugin="knob" data-width="180" data-height="180" data-min="-100" data-fgColor="#00a7e1" data-displayPrevious=true data-angleOffset=-125 data-angleArc=250 value="18" />
                                            </div>
                                        </div>


                                    </div>

                                </div> <!-- end card-body-->

                            </div> <!-- end col -->

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