<script src="<?= base_url('/assets/libs/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/metismenu/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/simplebar/simplebar.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/node-waves/waves.min.js') ?>"></script>

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

<script src="<?= base_url('/assets/libs/jquery-knob/jquery.knob.min.js') ?>"></script>

<script src="<?= base_url('/assets/js/pages/jquery-knob.init.js') ?>"></script>

<script src="<?= base_url('/assets/js/app.js') ?>"></script>

<!-- Required datatable js -->
<script src="<?= base_url('/assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Buttons examples -->
<script src="<?= base_url('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- Responsive examples -->
<script src="<?= base_url('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?= base_url('/assets/js/pages/datatables.init.js') ?>"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="<?= base_url("/plugins/dropify/js/dropify.min.js") ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            },
            error: {
                'fileSize': 'The file size is too big (1M max).'
            }
        });
    });
</script>