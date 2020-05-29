<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>@yield('page')</title>--}}

{{--    @section('page', config('app.name', 'Laravel'))--}}

    <title>
        @php
            $user = Auth::user();
        @endphp
        @if(($user)&&($user->roles->first())&&($user->roles->first()->id == 1))
            Adapto Administration
        @endif
        @if(($user)&&($user->roles->first())&&($user->roles->first()->id == 2))
            Adapto Consultation
        @endif
    </title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    {{ Html::style('resources/css/jquery-ui.css') }}
    {{ Html::style('resources/css/bootstrap-4.3.1.css') }}
{{--    {{ Html::style('resources/css/bootstrap.min.css') }}--}}
{{--    {{ Html::style('resources/css/font-awesome.min.css') }}--}}
    {{ Html::style('resources/css/alertify.core.css') }}
    {{ Html::style('resources/css/app.css') }}
    {{ Html::style('resources/css/datatables/dataTables.bootstrap.css') }}
    {{ Html::style('resources/css/device-specific.css') }}
    {{ Html::style('resources/css/custom.css') }}
    {{ Html::style('resources/css/validation.css') }}
    {{ Html::style('resources/css/chosen.css') }}
    {{ Html::style('resources/css/dhtmlxscheduler.css') }}
    {{ Html::style('resources/css/pnotify/pnotify.custom.min.css') }}
    {{ Html::style('resources/css/pnotify/pnotify.buttons.css') }}
    {{ Html::style('resources/css/pnotifyCustom.css') }}
    {{ Html::style('resources/css/animate.css') }}
    {{ Html::style('css/common.css') }}
    {{ Html::style('resources/css/overides.css') }}

    <link rel="apple-touch-icon" sizes="57x57" href="{{ public_path('resources/images/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ public_path('resources/images/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ public_path('resources/images/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ public_path('resources/images/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ public_path('resources/images/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ public_path('resources/images/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ public_path('resources/images/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ public_path('resources/images/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ public_path('resources/images/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ public_path('resources/images/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ public_path('resources/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ public_path('resources/images/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ public_path('resources/images/favicon-16x16.png') }}">

	@yield('panichd_assets')
</head>
<body class="skin-blue">
{{--<body>--}}
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar">
                <div class="main_menu">
                @include('includes.menu')
                </div>
                <center style="color: white; font-size: 14px"><h4 style="font-size: 18px;line-height: 1.1"><br/>Adapto 1.3.0.0 - RC4</h4><br>© Copyright @php echo date('Y'); @endphp - Adapto<br/>
                    Technology Pty Limited <br/>(ACN 608 530 669).</center>
            </section>
        </aside>
        <aside class="right-side">
            <section class="content-header custom-bread-crumb" id="bread-crumb">
{{--                <a href="#" onclick="logout();" class="custom-login-button">--}}
{{--                    <span>Logout</span>--}}
{{--                </a>--}}
                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="custom-login-button">
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <button data-ref="sub-menu-items" data-index="1" class="breadcrumb-btn cursor-normal" type="submit" id="1-bc">
                    <span class="bc-img-wrap"><img class="breadcrumb-main-icon" src="{{ URL::asset('resources/images/help_Black.png') }}"></span>
                    <span class="breadcrumb-text" style="position: relative; top: 4px; padding-left: 10px; font-weight: normal">Help</span>
                </button>
                <i class="fa fa-chevron-right breadcrumb-icn " id="1-ic"></i>
                <button data-ref="sub-menu-items" data-index="2" class="breadcrumb-btn font-blue" type="submit" id="2-bc">
                    <span class="breadcrumb-text">Desk</span>
                </button>
                <i class="fa fa-chevron-right breadcrumb-icn font-blue" id="3-ic"></i>
            </section>

            <section class="row">
                <section class="col-md-12">
                    <header id="panichd_header">
                        <nav class="navbar navbar-expand-md navbar-light bg-light">
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
                </section>
            </section>
        </aside>
    </div>

{{--    {{ Html::script('resources/js/jquery-1.9.0.min.js') }}--}}
{{--    {{ Html::script('resources/js/jquery-ui.js') }}--}}
{{--    {{ Html::script('resources/js/bootstrap.min.js') }}--}}
{{--    {{ Html::script('resources/js/plugins/alertify.js') }}--}}
{{--    {{ Html::script('resources/js/plugins/bootbox.js') }}--}}
{{--    {{ Html::script('resources/js/validationRules.js') }}--}}
{{--    {{ Html::script('resources/js/plugins/validation/jquery.validate.min.js') }}--}}
{{--    {{ Html::script('resources/js/app.js') }}--}}
{{--    {{ Html::script('resources/js/pnotify/pnotify.custom.js') }}--}}
{{--    {{ Html::script('resources/js/pnotify/pnotifyCustom.js') }}--}}
{{--    {{ Html::script('resources/js/logout.js') }}--}}
{{--    {{ Html::script('resources/js/commonFunctions.js') }}--}}

    <script>
        window.userRole = "msl";
        window.username = "MSL";

        $(document).ready(function () {
            $('.tree').hide();
            // $('.nav-list').hide();
            setTimeout(function () {
                $('.left-side').addClass('menu-back');
            }, 400);

        });

        $('.main-menu-item').click(function () {

            $('.tree').hide();
            $(this).parent().children('ul.tree').toggle(200);
        });
    </script>

    @if(Session::has('flash.alerts'))
        <script>
                    @foreach(Session::get('flash.alerts') as $alert)

            var AlertEnum = {
                    NORMAL  :1,
                    ERROR   :2,
                    WARNING :3,
                    INFO    :4
                }

            var type="{!! $alert['level'] !!}";
            var message="{!! $alert['message'] !!}";


            if(type == "success"){
                AlartMsg("SUCCESS",AlertEnum.NORMAL,'image_ok',message);
            }else if(type == "warning"){
                AlartMsg("Warning",AlertEnum.WARNING,'image_warning',message);
            }else if(type == "danger"){
                AlartMsg("ERROR",AlertEnum.ERROR,'image_error',message);
            }else if(type == "info"){
                AlartMsg("INFO",AlertEnum.INFO,'image_warning',message);
            }


            function AlartMsg(text,type,icon,errorMsg){
                //PNotify.removeAll();
                PNotify.prototype.options.delay = 3000;
                //update_timer_display();
                var centerPoint = ($(window).width() / 2- (300 / 2))
                new PNotify({
                    title: text,
                    text: errorMsg,
                    icon: 'left_top_image_in_popup image_in_popup '+icon+'',
                    animate: {
                        animate: true,
                        in_class: 'slideInDown',
                        out_class: 'slideOutUp'
                    },
                    before_open: function(PNotify) {
                        PNotify.get().css({ top: 150 , left: centerPoint });
                    },
                    type: 'success'
                });

                if(type == AlertEnum.NORMAL){
                    $('.ui-pnotify-container').addClass('adapto_blue_background');
                }else if(type == AlertEnum.WARNING){
                    $('.ui-pnotify-container').addClass('adapto_blue_background adapto_yello_backgroun');
                }else if(type == AlertEnum.ERROR){
                    $('.ui-pnotify-container').addClass('adapto_blue_background adapto_red_backgroun');
                }else if(type == AlertEnum.INFO){
                    $('.ui-pnotify-container').addClass('adapto_blue_background adapto_green_backgroun');
                }
                $('.ui-pnotify-title').replaceWith( ''+text+'' );

            }


            @endforeach
        </script>
    @endif
</body>
</html>
