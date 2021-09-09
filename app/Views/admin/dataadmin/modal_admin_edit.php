<!--  Modal content for the above example -->
<div class="modal fade" id="dataeditadmin" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Edit Data Admin <p class="username"></p>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <p hidden id="edit_id"></p>
                            <div class="col-4">
                                <!-- <img id="edit_customer_image" style="width: 120px; height: 140px;" class="img-responsive"> -->
                                <input type="file" class="dropify" id="edit_customer_image" data-height="200">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-3">
                                        <span>ID Admin : </span>
                                    </div>
                                    <div class="col-9">
                                        <p id="edit_id_admin"></p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span>Username : </span>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" readonly class="form-control" id="edit_username">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span>Address : </span>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="edit_alamat">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span>Email : </span>
                                    </div>
                                    <div class="col-9">
                                        <input type="email" class="form-control" id="edit_email">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-3">
                                        <span>Status : </span>
                                    </div>
                                    <div class="col-9">
                                        <p id="edit_status"></p>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" value="AKTIF" name="status" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" value="NON AKTIF" name="status" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Non Aktif</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <button type="button" onclick="updateAdmin()" class="btn btn-primary">Update Admin</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->