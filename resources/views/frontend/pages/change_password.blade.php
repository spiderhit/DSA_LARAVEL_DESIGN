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
                <div class="dashboard-title   fl-wrap">
                    <h3>Change Password</h3>
                </div>
                <!-- profile-edit-container-->
                <div class="profile-edit-container fl-wrap block_box">
                    <div class="custom-form">
                        <div class="pass-input-wrap fl-wrap">
                            <label>Current Password</label>
                            <input type="password" class="pass-input" placeholder="" value="">
                            <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                        </div>
                        <div class="pass-input-wrap fl-wrap">
                            <label>New Password</label>
                            <input type="password" class="pass-input" placeholder="" value="">
                            <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                        </div>
                        <div class="pass-input-wrap fl-wrap">
                            <label>Confirm New Password</label>
                            <input type="password" class="pass-input" placeholder="" value="">
                            <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                        </div>
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
