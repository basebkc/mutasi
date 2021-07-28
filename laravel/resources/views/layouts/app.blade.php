<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicon.png') }}">
    <title>Mutasi Online</title>
    <meta name="description" content="Basic Inputs">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/vendors.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/app.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/themes/cust-theme-8.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/notifications/toastr/toastr.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/fa-solid.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    


@yield('head')
<!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/bs4/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/bs4/img/favicon/favicon-32x32.png') }}">
    <link rel="mask-icon" href="{{ asset('public/assets/bs4/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="{{ asset('public/assets/css/notifications/sweetalert2/sweetalert2.bundle.css') }}">
    <style>
        .swal2-container {
           z-index: 10050;
        }
    </style>
</head>
{{--<body class="mod-bg-1 nav-function-fixed ">--}}
<body class="mod-bg-1 ">
<script>
    /**
     *	This script should be placed right after the body tag for fast execution
     *	Note: the script is written in pure javascript and does not depend on thirdparty library
     **/
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        /**
         * Load from localstorage
         **/
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    /**
     * Load theme options
     **/
    if (themeSettings.themeOptions)
    {
        classHolder.className = themeSettings.themeOptions;
        console.log("%c✔ Theme settings loaded", "color: #148f32");
    }
    else
    {
        console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
    }
    if (themeSettings.themeURL && !document.getElementById('mytheme'))
    {
        var cssfile = document.createElement('link');
        cssfile.id = 'mytheme';
        cssfile.rel = 'stylesheet';
        cssfile.href = themeURL;
        document.getElementsByTagName('head')[0].appendChild(cssfile);
    }
    /**
     * Save to localstorage
     **/
    var saveSettings = function()
    {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
        {
            return /^(nav|header|mod|display)-/i.test(item);
        }).join(' ');
        if (document.getElementById('mytheme'))
        {
            themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
        };
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    /**
     * Reset settings
     **/
    var resetSettings = function()
    {
        localStorage.setItem("themeSettings", "");
    }

</script>
<div class="pace"></div>

{{--<div id="loading"></div>--}}
<!-- BEGIN Page Wrapper -->

<div class="page-wrapper">
    <div class="page-inner">
        <!-- BEGIN Left Aside -->
        <aside class="page-sidebar">
            <div class="page-logo">
                <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                    <img src="{{ asset('public/assets/img/favicon.png') }}" style="height:35px" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">{{ $title }}</span>
                    
                    
                </a>
            </div>
            <!-- BEGIN PRIMARY NAVIGATION -->
            <nav id="js-primary-nav" class="primary-nav" role="navigation">
                <div class="nav-filter">
                    <div class="position-relative">
                        <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control"
                               tabindex="0">
                        <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off"
                           data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                            <i class="fal fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="info-card">
                    <img src="{{ asset('public/assets/img/admin.png') }}" class="profile-image rounded-circle" alt="">
                    <div class="info-card-text">
                        <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ $user }}
                                    </span>
                        </a>
                        <span class="d-inline-block text-truncate text-truncate-sm"> {{ $jabatan }}</span>
                    </div>
                    <img src="{{ asset('public/assets/img/backgrounds/profil.jpg') }}" class="cover" alt="cover" width="100%">
                    <a href="#" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                        <i class="fal fa-angle-down"></i>
                    </a>
                </div>
                {{-- MULAI MENU --}}

                @include('layouts.navbar.analisa')
                @include('layouts.navbar.mutasi')
            </nav>
            <!-- END PRIMARY NAVIGATION -->
        </aside>
        <!-- END Left Aside -->
        <div class="page-content-wrapper">
            <!-- BEGIN Page Header -->
            <header class="page-header" role="banner">
                <!-- we need this logo when user switches to nav-function-top -->
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                        <img src="{{ asset('public/assets/bs4/img/logo.png') }}" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1"></span>
                        <span
                            class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- DOC: nav menu layout change shortcut -->
                <div class="hidden-md-down dropdown-icon-menu position-relative">
                    <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
                       data-class="nav-function-hidden" title="Hide Navigation">
                        <i class="ni ni-menu"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" class="btn js-waves-off" data-action="toggle"
                               data-class="nav-function-minify" title="Minify Navigation">
                                <i class="ni ni-minify-nav"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn js-waves-off" data-action="toggle"
                               data-class="nav-function-fixed" title="Lock Navigation">
                                <i class="ni ni-lock-nav"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- DOC: mobile button appears during mobile width -->
                <div class="hidden-lg-up">
                    <a href="#" class="header-btn btn press-scale-down" data-action="toggle"
                       data-class="mobile-nav-on">
                        <i class="ni ni-menu"></i>
                    </a>
                </div>
                <div class="ml-auto d-flex">
                    <!-- app user menu -->
                    <div>
                        <a href="#" data-toggle="dropdown" title=""
                           class="header-icon d-flex align-items-center justify-content-center ml-2">
                            <img src="{{ asset('public/assets/img/admin.png') }}" class="profile-image rounded-circle"
                                 alt="logout" style="object-position: top;
                                    object-fit: cover;
                                    height: 50px;
                                    width: 50px;"> {{ $user }}
                            {{-- you can also add username next to the avatar with the codes below: --}}
                            {{-- 	<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                                <i class="ni ni-chevron-down hidden-xs-down"></i> --}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                            <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                        <span class="mr-2">
                                            <img src="{{ asset('public/assets/img/admin.png') }}"
                                                 class="rounded-circle profile-image" alt="userPhoto" style="
                                                object-fit: cover;
                                                object-position: top;
                                            ">
                                        </span>
                                    <div class="info-card-text">
                                        <div class="fs-lg text-truncate text-truncate-lg"></div>
                                        <span
                                            class="text-truncate text-truncate-md opacity-80"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                <i class="float-right text-muted fw-n">F11</i>
                            </a>
                            <a href="{{env('APP_URL_HOME')}}" class="dropdown-item" >
                                <span data-i18n="drpdwn.fullscreen">Bank BKC</span>
                                <i class="float-right text-muted fw-n">Back to Home</i>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item fw-500 pt-3 pb-3" href="#">
                                <span data-i18n="drpdwn.page-logout">Logout</span>
                                <span class="float-right fw-n"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END Page Header -->
            <!-- BEGIN Page Content -->
        @yield('content')
        <div class="blockConnection"></div>
        <!-- this overlay is activated only when mobile menu is triggered -->
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
            <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
           
            <footer class="page-footer" role="contentinfo">
                <hr>
                <div class="d-flex align-items-center flex-1 text-muted">
                        <span class="hidden-md-down fw-700">
                         Team IT Bank BKC. © 2021</span>
                </div>
                <div>
                    <ul class="list-table m-0">
                        <li class="pl-3"><a href="#" class="text-secondary fw-700">Documentation</a></li>
                        <li class="pl-3 fs-xl"><a href="#" class="text-secondary" target="_blank">
                                <i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </footer>
       
        </div>
    </div>
</div>

<script src="{{ asset('public/assets/js/vendors.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/app.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/notifications/toastr/toastr.js') }}"></script>

<script src="{{ asset('public/assets/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('public/assets/js/notifications/sweetalert2/sweetalert2.bundle.js') }}"></script>

{{-- <script src="{{asset('assets_custom/js/jquery.loading-indicator.js') }}"></script> --}}

<script>
    // var homeLoader = $('body').loadingIndicator({
    //     useImage: false,
    // }).data("loadingIndicator");
    // homeLoader.show();
    function closeModal() {
        $('.blockConnection').html('')
    }

    $('.indicator').hide();
    
</script>

@yield('scripts')
<script>
    $(document).ready(function () {
        // homeLoader.hide();
        $.ajax({
            type: "GET",
            url:   "/me",
            // headers: {
            //     'Authorization': window.CONFIG.authToken
            // },
            dataType: "json",
            crossDomain: true,
            success: function (data) {

                $('.info-card').html('   <img src="https://account.ccbi.co.id/profile/picture" class="profile-image rounded-circle" alt="'+data.nama+'">\n' +
                    '                    <div class="info-card-text">\n' +
                    '                        <a href="#" class="d-flex align-items-center text-white">\n' +
                    '                                    <span class="text-truncate text-truncate-sm d-inline-block">\n' +data.nama+
                    '                                       \n' +
                    '                                    </span>\n' +
                    '                        </a>\n' +
                    '                        <span class="d-inline-block text-truncate text-truncate-sm">'+data.userJobs[0].job.name +
                    '</span>\n' +
                    '                    </div>\n' +
                    '                    <img src="http://devdloan.ccbi.co.id/assets/bs4/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">\n' +
                    '                    <a href="#" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">\n' +
                    '                        <i class="fal fa-angle-down"></i>')
                    
                    console.log(data.authorities);
                    for (i = 0; i < data.authorities.length; i++) {

                        console.log(data.authorities[i].authority);

                        if(data.authorities[i].authority == "S1" ||
                        data.authorities[i].authority == "S0118" || 
                        data.authorities[i].authority == "S0348" ||
                        data.authorities[i].authority == "S0216" ||
                        data.authorities[i].authority == "S0214"
                        ){
                            $('.indicator').hide();
                           
                            $('.menuscorecard').show();
                            // $(".CRD").hide();
                            checkBtnCrediteReview = "1";
                            break;

                        }else if(data.authorities[i].authority == "S090"){
                            // ["S0309", "S051", "S0362", "S085", "S0249", "S0311"]

                            $('.indicator').hide();
                            $('.menuscorecard').show();
                            // $(".CRD").hide();
                            checkBtnCrediteReview = "1";
                            break;
                        }if(data.authorities[i].authority != "S0309" ||
                            data.authorities[i].authority != "S1"    ||
                            data.authorities[i].authority != "S0118" || 
                            data.authorities[i].authority != "S0348" ||
                            data.authorities[i].authority != "S0216" ||
                            data.authorities[i].authority != "S0214"){
                            $(".notbisnis").hide();

                        }else{
                            // $("#v-pills-review-tab"
                            // $(".CRD").hide();
                            checkBtnCrediteReview = "0";

                        }


                        // if(data.authorities[i].authority === "S0309"){
                        //     $('.indicator').hide();
                        // }
                    }
            }
        });
    });

  
    // $(".CRD").hide();
    var checkBtnCrediteReview = "0";

    setInterval(function(){
        $.ajax({
            type: "GET",
            url:   "{{ env('APP_URL') }}" +"/actuator/health",
            headers: {
                // 'Authorization': window.CONFIG.authToken
            },
            dataType: "json",
            crossDomain: true,
            success: function (data) {

                if((typeof data.status)=== "undefined" || data.status !== "UP" ) {
                    // alert("Please check your network connection or contact system administrator");
                    $('.blockConnection').html('<div id="modal-not-established" class="modal fade example-modal-top-transparent show" tabindex="-1" role="dialog" aria-modal="true" style="padding-right: 16px; display: block;">\n' +
                        '                <div class="modal-dialog modal-dialog-top modal-transparent">\n' +
                        '                    <div class="modal-content">\n' +
                        '                        <div class="modal-body" style="padding: initial;margin-bottom: initial;">\n' +
                        '                            <div class="alert bg-warning-400 fade show" role="alert" style="margin-bottom: initial;">\n' +
                        '                                <div class="d-flex align-items-center">\n' +
                        '                                    <div class="alert-icon width-1">\n' +
                        '                                        <i class="fal fa-sync fs-xl fa-spin"></i>\n' +
                        '                                    </div>\n' +
                        '                                    <div class="flex-1">\n' +
                        '                                        <span class="h5">Could not connect to server</span>\n' +
                        '                                        <br>\n' +
                        '                                        Please check your network connection or contact system administrator\n' +
                        '                                    </div>\n' +
                        '                                    \n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +'<button onclick="closeModal();" type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>'+
                        '            </div>');
                    // <a onclick="location.reload();" class="btn btn-info btn-w-m fw-500 btn-sm waves-effect waves-themed" data-dismiss="alert" aria-label="Close">Refresh</a>
                }
                else{
                    $('.blockConnection').html('')
                }

                

            },
            error: function (err) {
                // alert("Please check your network connection or contact system administrator");
                $('.blockConnection').html('<div id="modal-not-established" class="modal fade example-modal-top-transparent show" tabindex="-1" role="dialog" aria-modal="true" style="padding-right: 16px; display: block;">\n' +
                    '                <div class="modal-dialog modal-dialog-top modal-transparent">\n' +
                    '                    <div class="modal-content">\n' +
                    '                        <div class="modal-body" style="padding: initial;margin-bottom: initial;">\n' +
                    '                            <div class="alert bg-warning-400 fade show" role="alert" style="margin-bottom: initial;">\n' +
                    '                                <div class="d-flex align-items-center">\n' +
                    '                                    <div class="alert-icon width-1">\n' +
                    '                                        <i class="fal fa-sync fs-xl fa-spin"></i>\n' +
                    '                                    </div>\n' +
                    '                                    <div class="flex-1">\n' +
                    '                                        <span class="h5">Could not connect to server</span>\n' +
                    '                                        <br>\n' +
                    '                                        Please check your network connection or contact system administrator\n' +
                    '                                    </div>\n' +'<button onclick="closeModal();" type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>'+
                    '                                    \n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>');
                console.log('salah');
                console.log(err);

            },

        });

    }, 300000);

</script>


</body>
@include('layouts.themes')
</html>
