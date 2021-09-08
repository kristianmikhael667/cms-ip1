<script>
    $(document).ready(function() {

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const username = $(this).data('name');
            console.log(username);
            const name = $(this).data('name');
            const price = $(this).data('price');
            const category = $(this).data('category_id');
            // Set data to Form Edit
            $('.username').val(username);

            // Call Modal Edit
            $('#datacustomer').modal('show');
        });

    });
</script>