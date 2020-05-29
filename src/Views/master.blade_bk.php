@extends('layouts.panichd')

@section('panichd')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page')</title>

    @section('page', config('app.name', 'Laravel'))

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('panichd_assets')

@stop

@section('main-content')
    <header id="panichd_header">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
{{--            <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">--}}
            <div class="navbar-collapse collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav mr-auto">
                    @yield('panichd_nav')
                </ul>
            </div>
        </nav>
    </header>
    <div id="panichd_content" class="container-fluid">
        @yield('panichd_errors')
        @yield('content')
    </div>

    <!-- Scripts -->

    @yield('footer')

@stop


@section('sub-content')

@stop

@section('bread-crumb')
    <a href="#" onclick="logout();" class="custom-login-button">
        <span>Logout</span>
    </a>
    <button data-ref="sub-menu-items" data-index="1" class="breadcrumb-btn cursor-normal" type="submit" id="1-bc">
        <span class="bc-img-wrap"><img class="breadcrumb-main-icon" src="{{ URL::asset('resources/images/help_Black.png') }}"></span><span class="breadcrumb-text">Help</span></button>
    <i class="fa fa-chevron-right breadcrumb-icn " id="1-ic"></i>
    <button data-ref="sub-menu-items" data-index="2" class="breadcrumb-btn font-blue" type="submit" id="2-bc"><span class="breadcrumb-text">Desk</span></button>
    <i class="fa fa-chevron-right breadcrumb-icn font-blue" id="3-ic"></i>

@stop



