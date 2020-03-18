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
                        <img src="{{asset('front_ui')}}/images/avatar/4.jpg" alt="">
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
                    <h3>Your Statistics</h3>
                </div>
                <!-- list-single-facts -->
                <div class="list-single-facts fl-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- inline-facts -->
                            <div class="inline-facts-wrap gradient-bg ">
                                <div class="inline-facts">
                                    <i class="fal fa-chart-bar"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="1054">0</div>
                                        </div>
                                    </div>
                                    <h6>Listing Views</h6>
                                </div>
                                <div class="stat-wave">
                                    <svg viewbox="0 0 100 25">
                                        <path fill="#fff" d="M0 30 V12 Q30 17 55 2 T100 11 V30z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                        <div class="col-md-4">
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap gradient-bg ">
                                <div class="inline-facts">
                                    <i class="fal fa-comments-alt"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="2557">0</div>
                                        </div>
                                    </div>
                                    <h6>Total Reviews</h6>
                                </div>
                                <div class="stat-wave">
                                    <svg viewbox="0 0 100 25">
                                        <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                        <div class="col-md-4">
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap gradient-bg ">
                                <div class="inline-facts">
                                    <i class="fal fa-envelope-open-dollar"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="125">0</div>
                                        </div>
                                    </div>
                                    <h6>Bookings </h6>
                                </div>
                                <div class="stat-wave">
                                    <svg viewbox="0 0 100 25">
                                        <path fill="#fff" d="M0 30 V12 Q30 12 55 5 T100 11 V30z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                    </div>
                </div>
                <!-- list-single-facts end -->


                <!-- dashboard-list-box-->

                <!-- dashboard-list-box end-->
            </div>
            <!-- dashboard content end-->
        </div>
    </section>
    <!--  section  end-->
    <div class="limit-box fl-wrap"></div>
</div>

@endsection
