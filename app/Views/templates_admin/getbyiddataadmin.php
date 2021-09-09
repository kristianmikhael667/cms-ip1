<script>
    const baseUrl = '<?= base_url(); ?>';
</script>
<script>
    detailAdmin = (id) => {
        $('#dataadmin').modal('show');
        let fd = new FormData();
        fd.append('id', id);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/admin_detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                // console.log(result);
                $("#detail_customer_image").attr('src', `/img/${result.upload_logo}`);
                $("#detail_id").text(result.id_admin);
                $("#detail_username").text(result.username);
                $("#detail_email").text(result.email);
                $("#detail_alamat").text(result.alamat);
                $("#detail_status").text(result.Status);
            }
        });
    }

    editAdmin = async (id) => {
        $('#dataeditadmin').modal('show');
        let fd = new FormData();
        fd.append('id', id);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/admin_detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)

                // $("#edit_customer_image").attr('src', 'src', `/img/${result.upload_logo}`);
                var imagenUrl = `/img/${result.upload_logo}`;
                var drEvent = $('#edit_customer_image').dropify({
                    defaultFile: imagenUrl
                });
                drEvent = drEvent.data('dropify');
                drEvent.resetPreview();
                drEvent.clearElement();
                drEvent.settings.defaultFile = imagenUrl;
                drEvent.destroy();
                drEvent.init();

                // $("#edit_customer_image").attr('src', `/img/${result.upload_logo}`);
                $("#edit_id").text(result.id);
                $("#edit_id_admin").text(result.id_admin);
                $("#edit_username").val(result.username);
                $("#edit_email").val(result.email);
                $("#edit_alamat").val(result.alamat);
                $("input[name=status][value=" + result.Status + "]").prop('checked', true);
            }
        });
    }

    updateAdmin = async () => {
        let fd = new FormData()
        let admin_id = $("#edit_id").val();
        let admin_id_admin = $("#edit_id_admin").val();
        let admin_username = $("#edit_username").val();
        let admin_status = $('input[name="status"]:checked').val();
        let admin_email = $("#edit_email").val();
        let admin_alamat = $("#edit_alamat").val();
        let admin_image = $("#edit_customer_image")[0].files[0];

        fd.append('adminid', admin_id)
        fd.append('adminid_admin', admin_id_admin)
        fd.append('adminusername', admin_username)
        fd.append('adminstatus', admin_status)
        fd.append('adminemail', admin_email)
        fd.append('adminalamat', admin_alamat)

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/updatadmin`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been updated',
                    showConfirmButton: false,
                    timer: 1500
                })
                location.reload()
            }
        })
    }
    // deleteCustomer = (id, username) => {
    //     // let fd = new FormData();
    //     // fd.append('id_customer', id_customer);
    //     Swal.fire({
    //         title: `Are you sure delete <b>${username}</b> ?`,
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Yes, delete it!'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             $.ajax({
    //                 type: "DELETE",
    //                 cache: false,
    //                 contentType: false,
    //                 processData: false,
    //                 url: `${baseUrl}/admin/deletecustomer/` + id,
    //                 success: function(data) {
    //                     console.log(data);
    //                     Swal.fire(
    //                         'Deleted!',
    //                         'Your Data Customer Has Deleted.',
    //                         'success'
    //                     )
    //                     window.location.reload();
    //                 }
    //             })
    //         }
    //     })
    // }
</script>