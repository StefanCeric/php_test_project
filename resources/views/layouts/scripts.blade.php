<!-- BEGIN VENDOR SCRIPTS -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!--<script src="{{ asset('fonts/fontawesome/js/fontawesome.min.js') }}"></script>-->
@yield('vendorScripts')
<!-- END VENDOR SCRIPTS -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="{{ asset('/js/notifications.js') }}"></script>
@yield('pageScripts')
<!-- END PAGE SCRIPTS -->

