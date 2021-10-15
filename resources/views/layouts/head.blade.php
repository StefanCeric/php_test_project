<!-- BEGIN META -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- END META -->

<!-- BEGIN STYLESHEETS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/fontawesome.min.css')}}"/>
<!-- BEGIN: VENDOR CSS-->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
@yield('vendorCss')
<!-- END: VENDOR CSS-->
<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@yield('pageCss')
<!-- END STYLESHEETS -->