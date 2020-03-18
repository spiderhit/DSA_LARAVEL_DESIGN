
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Townhub - Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('front_ui')}}/css/reset.css">
        <link type="text/css" rel="stylesheet" href="{{asset('front_ui')}}/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="{{asset('front_ui')}}/css/style.css">
        <link type="text/css" rel="stylesheet" href="{{asset('front_ui')}}/css/color.css">
        <link type="text/css" rel="stylesheet" href="{{asset('front_ui')}}/css/dashboard-style.css">

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('front_ui')}}/images/favicon.ico">
        <style>
        .logo-holder img {
    width: 450px;
    height: 100%;
}.main-header:before {
    content: '';
    position: absolute;
    right: 0;
    width: 250px;
    height: 100%;
    bottom: 0;
    opacity: 1;
    transition: all .3s ease-in-out;
    background: #3d528b;
}

        </style>
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
            @include('frontend.includes.header')
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->

                @yield('content')
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
            @include('frontend.includes.footer')
            <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><span>Location for : </span><a href="#">Listing Title</a></h3>
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap  modal_main">
                        <div class="main-register_title">Welcome to <span><strong>Town</strong>Hub<strong>.</strong></span></div>
                        <div class="close-reg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text" onclick="this.select()" value="">
                                            <label>Password <span>*</span> </label>
                                            <input name="password" type="password" onclick="this.select()" value="">
                                            <button type="submit" class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a3" type="checkbox" name="check">
                                                <label for="check-a3">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                <label>Full Name <span>*</span> </label>
                                                <input name="name" type="text" onclick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text" onclick="this.select()" value="">
                                                <label>Password <span>*</span></label>
                                                <input name="password" type="password" onclick="this.select()" value="">
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a" type="checkbox" name="check">
                                                    <label for="check-a">I agree to the <a href="#">Terms and Conditions</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="btn float-btn color2-bg"> Register  <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"> Facebook</a>
                            </div>
                            <div class="wave-bg">
                                <div class='wave -one'></div>
                                <div class='wave -two'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="{{asset('front_ui')}}/js/jquery.min.js"></script>
        <script src="{{asset('front_ui')}}/js/plugins.js"></script>
        <script src="{{asset('front_ui')}}/js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
        <script src="{{asset('front_ui')}}/js/map-single.js"></script>
        <script src="{{asset('front_ui')}}/js/dashboard.js"></script>
    </body>
</html>
