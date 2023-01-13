 <!-- General JS Scripts -->
 <script src="{{ asset('assets') }}/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="{{ asset('assets') }}/bundles/datatables/datatables.min.js"></script>
 <script
     src="{{ asset('assets') }}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
 </script>
 <script src="{{ asset('assets') }}/bundles/jquery-ui/jquery-ui.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="{{ asset('assets') }}/js/page/datatables.js"></script>
 <!-- Template JS File -->
 <script src="{{ asset('assets') }}/js/scripts.js"></script>
 <!-- Custom JS File -->
 <script src="{{ asset('assets') }}/js/custom.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <!-- Toastr Script -->

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Sweetalert Script -->
<script>
    $('.delete').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to delete this row?',
            text: "Once deleted, you will not be able to recover this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            }
        })
    });
</script>


<!-- Logout -->
<script>
    $('.logout').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to log out now?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            }
        })
    });

    $(document).ready(function() {
        $('#table-1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "bDestroy": true,
        } );
    } );

    
</script>