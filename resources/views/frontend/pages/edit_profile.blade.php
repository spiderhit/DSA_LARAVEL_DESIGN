@extends('layouts.frontend')
@section('content')

<div class="content">
    <!--  section  -->
    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
        <div class="container">
            <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Main page</span></div>
            <!--Tariff Plan menu-->
            <div class="tfp-btn"><span>Tariff Plan : </span> <strong>Extended</strong></div>
            <div class="tfp-det">
                <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                <a href="#" class="tfp-det-btn color2-bg">Details</a>
            </div>
            <!--Tariff Plan menu end-->
            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                <h1>Welcome  : <span>Alisa Noory</span></h1>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="dashboard-header fl-wrap">
            <div class="container">
                <div class="dashboard-header_conatiner fl-wrap">
                    <div class="dashboard-header-avatar">
                        <img src="images\avatar\4.jpg" alt="">
                        <a href="dashboard-myprofile.html" class="color-bg edit-prof_btn"><i class="fal fa-edit"></i></a>
                    </div>
                    <div class="dashboard-header-stats-wrap">
                        <div class="dashboard-header-stats">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--  dashboard-header-stats-item -->
                                    <div class="swiper-slide">
                                        <div class="dashboard-header-stats-item">
                                            <i class="fal fa-map-marked"></i>
                                            Active Listings
                                            <span>21</span>
                                        </div>
                                    </div>
                                    <!--  dashboard-header-stats-item end -->
                                    <!--  dashboard-header-stats-item -->
                                    <div class="swiper-slide">
                                        <div class="dashboard-header-stats-item">
                                            <i class="fal fa-chart-bar"></i>
                                            Listing Views
                                            <span>1054</span>
                                        </div>
                                    </div>
                                    <!--  dashboard-header-stats-item end -->
                                    <!--  dashboard-header-stats-item -->
                                    <div class="swiper-slide">
                                        <div class="dashboard-header-stats-item">
                                            <i class="fal fa-comments-alt"></i>
                                            Total Reviews
                                            <span>79</span>
                                        </div>
                                    </div>
                                    <!--  dashboard-header-stats-item end -->
                                    <!--  dashboard-header-stats-item -->
                                    <div class="swiper-slide">
                                        <div class="dashboard-header-stats-item">
                                            <i class="fal fa-heart"></i>
                                            Times Bookmarked
                                            <span>654</span>
                                        </div>
                                    </div>
                                    <!--  dashboard-header-stats-item end -->
                                </div>
                            </div>
                        </div>
                        <!--  dashboard-header-stats  end -->
                        <div class="dhs-controls">
                            <div class="dhs dhs-prev"><i class="fal fa-angle-left"></i></div>
                            <div class="dhs dhs-next"><i class="fal fa-angle-right"></i></div>
                        </div>
                    </div>
                    <!--  dashboard-header-stats-wrap end -->
                    <a class="add_new-dashboard">Add Listing <i class="fal fa-layer-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
        <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
            <div class="circle_bg-bal circle_bg-bal_small"></div>
        </div>
        <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
            <div class="circle_bg-bal circle_bg-bal_big"></div>
        </div>
        <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
            <div class="circle_bg-bal circle_bg-bal_big"></div>
        </div>
        <div class="circle-wrap" style="left:40%;bottom:-70px;">
            <div class="circle_bg-bal circle_bg-bal_middle"></div>
        </div>
        <div class="circle-wrap" style="right:40%;top:-10px;">
            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
        <div class="circle-wrap" style="right:55%;top:90px;">
            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
    </section>
    <!--  section  end-->
    <!--  section  -->
    <section class="gray-bg main-dashboard-sec" id="sec1">
        <div class="container">
            <!--  dashboard-menu-->
            @include('frontend.includes.dashbaord')
            <!-- dashboard-menu  end-->
            <!-- dashboard content-->
            <div class="col-md-9">
                <div class="dashboard-title fl-wrap">
                    <h3>Your Profile</h3>
                </div>
                <!-- profile-edit-container-->
                <div class="profile-edit-container fl-wrap block_box">
                    <div class="custom-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>First Name <i class="fal fa-user"></i></label>
                                <input type="text" placeholder="Jessie" value="">
                            </div>
                            <div class="col-sm-6">
                                <label>Second Name <i class="fal fa-user"></i></label>
                                <input type="text" placeholder="Manrty" value="">
                            </div>
                            <div class="col-sm-6">
                                <label>Email Address<i class="far fa-envelope"></i>  </label>
                                <input type="text" placeholder="JessieManrty@domain.com" value="">
                            </div>
                            <div class="col-sm-6">
                                <label>Phone<i class="far fa-phone"></i>  </label>
                                <input type="text" placeholder="+7(123)987654" value="">
                            </div>
                            <div class="col-sm-6">
                                <label> Adress <i class="fas fa-map-marker"></i>  </label>
                                <input type="text" placeholder="USA 27TH Brooklyn NY" value="">
                            </div>
                            <div class="col-sm-6">
                                <label> Website <i class="far fa-globe"></i>  </label>
                                <input type="text" placeholder="themeforest.net" value="">
                            </div>
                        </div>
                        <label> Notes</label>
                        <textarea cols="40" rows="3" placeholder="About Me" style="margin-bottom:20px;"></textarea>
                        <label>Change Avatar</label>
                        <div class="photoUpload">
                            <span><i class="fal fa-image"></i> <strong>Add Photos</strong></span>
                            <input type="file" class="upload">
                        </div>
                    </div>
                </div>
                <!-- profile-edit-container end-->
                <div class="dashboard-title dt-inbox fl-wrap">
                    <h3>Your  Socials</h3>
                </div>
                <!-- profile-edit-container-->
                <div class="profile-edit-container fl-wrap block_box">
                    <div class="custom-form">
                        <label>Facebook <i class="fab fa-facebook"></i></label>
                        <input type="text" placeholder="https://www.facebook.com/" value="">
                        <label>Twitter<i class="fab fa-twitter"></i>  </label>
                        <input type="text" placeholder="https://twitter.com/" value="">
                        <label>Vkontakte<i class="fab fa-vk"></i>  </label>
                        <input type="text" placeholder="https://vk.com" value="">
                        <label> Instagram <i class="fab fa-instagram"></i>  </label>
                        <input type="text" placeholder="https://www.instagram.com/" value="">
                        <button class="btn    color2-bg  float-btn">Save Changes<i class="fal fa-save"></i></button>
                    </div>
                </div>
                <!-- profile-edit-container end-->
            </div>
            <!-- dashboard content end-->
        </div>
    </section>
    <!--  section  end-->
    <div class="limit-box fl-wrap"></div>
</div>

@endsection
