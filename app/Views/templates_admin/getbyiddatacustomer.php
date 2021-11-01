<script>
    const baseUrl = '<?= base_url(); ?>';
</script>
<script>
    detailcustomer = (id) => {
        $('#datacustomer').modal('show');
        let fd = new FormData();
        fd.append('id', id);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/customer_detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                // console.log(result);
                $("#detail_customer_image").attr('src', `/img/${result.upload_logo}`);
                $("#detail_id").text(result.id_customer);
                $("#detail_username").text(result.username);
                $("#detail_perusahaan").text(result.nama_perusahaan);
                $("#detail_alamat").text(result.alamat);
                $("#detail_status").text(result.Status);
            }
        });
    }

    detailUserbycustomer = (id_customer, usernamre) => {
        $('#datausercustomer').modal('show');
        $('#usernamecustomer').text(usernamre);
        let fd = new FormData();
        fd.append('id_customer', id_customer);
        console.log(id_customer)
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/user_by_customer_detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                console.log(result);
                var html = '';
                var i;
                for (i = 0; i < result.length; i++) {
                    html += '<tr>' +
                        '<td>' + result[i].id_user + '</td>' +
                        '<td>' + result[i].id_customer + '</td>' +
                        '<td>' + result[i].username + '</td>' +
                        '<td>' + result[i].alamat + '</td>' +
                        '<td><img style="width:100px; height:100px" src="/img/' + result[i].upload_logo + '"></td>' +
                        '<td>' + result[i].Status + '</td>' +
                        '</tr>';
                }
                $('#show_data').html(html);
            }
        });
        console.log('user : ' + id);
    }

    deleteCustomer = (id, username) => {
        // let fd = new FormData();
        // fd.append('id_customer', id_customer);
        Swal.fire({
            title: `Are you sure delete <b>${username}</b> ?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: `${baseUrl}/admin/deletecustomer/` + id,
                    success: function(data) {
                        console.log(data);
                        Swal.fire(
                            'Deleted!',
                            'Your Data Customer Has Deleted.',
                            'success'
                        )
                        window.location.reload();
                    }
                })
            }
        })
    }
</script>