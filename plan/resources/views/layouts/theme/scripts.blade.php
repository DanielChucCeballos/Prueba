<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/js/loader.js') }}"></script>

<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('assets/js/custom.js') }} "></script>
<script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js')}} "></script>
<script src="{{ asset('plugins/notification/snackbar/snackbar.min.js')}} "></script>
<script src="{{ asset('plugins/nicescroll/nicescroll.min.js')}} "></script>
<script src="{{ asset('plugins/currency/currency.js')}} "></script>

<script>
    function noty(msg, option = 1){
        snackbar.show({
            text: msg.toUpperCase(),
            actionText: 'CERRAR',
            actionTextColor:'#fff',
            backgroundColor:option == 1 ? '#3b3f5c' : '#e7515a',
            pos: 'top-right'
        });
    }
</script>
@livewireScripts