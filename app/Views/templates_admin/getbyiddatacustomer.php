<script>
    const baseUrl = '<?= base_url(); ?>';
</script>
<script>
    detailcustomer = (id_customer) => {
        $('#datacustomer').modal('show');
        let fd = new FormData();
        fd.append('id_customer', id_customer);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/customer_detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                console.log(result);
            }
        });
    }
</script>