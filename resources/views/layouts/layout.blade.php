<!DOCTYPE html>
<html class="loading"
  lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{'en'}}@endif"
  data-textdirection="ltr">
<head>
    <title>{{ config('app.name', 'TestProject') }}</title>

    @include('layouts.head')
    
</head>
<body>
    <!-- BEGIN HEADER-->
    @include('layouts.header')
    <!-- END HEADER-->
    <!-- BEGIN SIDEBAR-->
    @include('layouts.sidebar')
    <!-- END SIDEBAR-->

    <!-- BEGIN BASE-->
    <div id="main">
        <!-- BEGIN CONTENT-->
        @yield('content')
        <!-- END CONTENT -->
    </div>
    <!-- END BASE -->
    @include('layouts.scripts')
</body>
</html>

