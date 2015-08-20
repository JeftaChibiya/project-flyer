@if (Session::has('flash_message'))
    <script type="text/javascript">
        swal({
            title: "{{{ Session::get('flash_message.title') }}}",
            text: "{{{ Session::get('flash_message.message') }}}",
            type: "info",
            timer: 2000,
            showConfirmButton: false
        });
    </script>
@endif