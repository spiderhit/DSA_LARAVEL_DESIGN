@extends('layouts.frontend')
@section('content')
<div class="content">
    <section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
        <div class="bg-parallax-wrap">
            <div class="bg par-elem " data-bg="images/bg/6.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="list-single-header-item  fl-wrap">
                <div class="row">
                    <div class="col-md-9">
                        <h1>Iconic Cafe in Manhattan <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 Bright St New York, USA</a> <a href="#"> <i class="fal fa-phone"></i>+38099231212</a> <a href="#"><i class="fal fa-envelope"></i> yourmail@domain.com</a></div>
                    </div>
                    <div class="col-md-3">
                        <a class="fl-wrap list-single-header-column custom-scroll-link " href="#sec5">
                            <div class="listing-rating-count-wrap single-list-count">
                                <div class="review-score">4.1</div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                <br>
                                <div class="reviews-count">2 reviews</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-single-header_bottom fl-wrap">
                <a class="listing-item-category-wrap" href="#">
                    <div class="listing-item-category  red-bg"><i class="fal fa-cheeseburger"></i></div>
                    <span>Restaurants</span>
                </a>
                <div class="list-single-author"> <a href="author-single.html"><span class="author_avatar"> <img alt='' src='{{asset('front_ui')}}/images/avatar/5.jpg'>  </span>By  Alisa Noory</a></div>
                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                <div class="list-single-stats">
                    <ul class="no-list-style">
                        <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  156 </span></li>
                        <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark -  24 </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- scroll-nav-wrapper-->
    <div class="scroll-nav-wrapper fl-wrap">
        <div class="container">
            <nav class="scroll-nav scroll-init">
                <ul class="no-list-style">
                    <li><a class="act-scrlink" href="#sec1"><i class="fal fa-images"></i> Top</a></li>
                    <li><a href="#sec2"><i class="fal fa-info"></i>Details</a></li>
                    <li><a href="#sec3"><i class="fal fa-image"></i>Gallery</a></li>
                    <li><a href="#sec4"><i class="fal fa-utensils"></i>Menu</a></li>
                    <li><a href="#sec5"><i class="fal fa-comments-alt"></i>Reviews</a></li>
                </ul>
            </nav>
            <div class="scroll-nav-wrapper-opt">
                <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Save </a>
                <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Share </a>
                <div class="share-holder hid-share">
                    <div class="share-container  isShare"></div>
                </div>
                <div class="show-more-snopt"><i class="fal fa-ellipsis-h"></i></div>
                <div class="show-more-snopt-tooltip">
                    <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                    <a href="#"> <i class="fas fa-flag-alt"></i> Report </a>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll-nav-wrapper end-->
    <section class="gray-bg no-top-padding">
        <div class="container">
            <div class="breadcrumbs inline-breadcrumbs fl-wrap">
                <a href="#">Home</a><a href="#">Listings</a><a href="#">New York</a><span>Listing Single</span>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <!-- list-single-main-wrapper-col -->
                <div class="col-md-8">
                    <!-- list-single-main-wrapper -->
                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <div class="list-single-main-media fl-wrap">
                            <img src="{{asset('front_ui')}}/images/all/48.jpg" class="respimg" alt="">
                            <a href="https://vimeo.com/70851162" class="promo-link   image-popup"><i class="fal fa-video"></i><span>Promo Video</span></a>
                        </div>
                        <!-- list-single-main-item -->
                        <div class="list-single-main-item fl-wrap block_box">
                            <div class="list-single-main-item-title">
                                <h3>Description</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6" style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;" >
                                        <h4 style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;"> hello</h4>
                                        <h4 style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;"> hello</h4>
                                        <h4 style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;"> hello</h4>


                                        </div>


                                        <div class="col-md-6" style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;" >
                                                <h4 style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;"> hello</h4>
                                                <h4 style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;"> hello</h4>
                                                <h4 style="margin-bottom: 10px; padding: 1px10px;text-align:left; position: relative;"> hello</h4>

                                            </div>


                            </div>
                            <div class="list-single-main-item_content fl-wrap">
                                <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim.   </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                <a href="#" class="btn color2-bg    float-btn">Visit Website<i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item -->

                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item-->

                        <!-- list-single-main-item end -->
                        <!-- list-single-facts -->

                        <!-- list-single-facts end -->
                        <!-- list-single-main-item-->

                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item -->

                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item -->

                        <!-- list-single-main-item end -->
                    </div>
                </div>
                <!-- list-single-main-wrapper-col end -->
                <!-- list-single-sidebar -->
                <div class="col-md-4">
                    <!--box-widget-item -->

                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Book a Table</h3>
                        </div>
                        <div class="box-widget">
                            <div class="box-widget-content">
                                <form class="add-comment custom-form">
                                    <fieldset>
                                        <label><i class="fal fa-user"></i></label>
                                        <input type="text" placeholder="Your Name *" value="">
                                        <div class="clearfix"></div>
                                        <label><i class="fal fa-envelope"></i>  </label>
                                        <input type="text" placeholder="Email Address*" value="">
                                        <div class="quantity fl-wrap">
                                            <span><i class="fal fa-user-plus"></i>Persons : </span>
                                            <div class="quantity-item">
                                                <input type="button" value="-" class="minus">
                                                <input type="text" name="quantity" title="Qty" class="qty color-bg" data-min="1" data-max="3" data-step="1" value="1">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                        <div class="listsearch-input-item clact date-container2">
                                            <label><i class="fal fa-calendar"></i></label>
                                            <input type="text" placeholder="Date / Time" name="datepicker-here-time" value="">
                                            <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                        </div>
                                        <textarea cols="40" rows="2" placeholder="Additional Information:"></textarea>
                                    </fieldset>
                                    <button class="btn color2-bg url_btn float-btn" onclick="window.location.href='booking.html'">Book Table Now <i class="fal fa-bookmark"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Location / Contacts  </h3>
                        </div>
                        <div class="box-widget">

                            <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                        <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                    </ul>
                                </div>
                                <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                    <ul class="no-list-style">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <div class="bottom-bcw-box_link"><a href="#" class="show-single-contactform tolt" data-microtip-position="top" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->

                    <!--box-widget-item end -->                                           <!--box-widget-item -->

                    <!--box-widget-item end -->
                    <!--box-widget-item -->

                    <!--box-widget-item end -->
                    <!--box-widget-item -->

                    <!--box-widget-item end -->
                    <!--box-widget-item -->

                    <!--box-widget-item end -->
                </div>
                <!-- list-single-sidebar end -->
            </div>
        </div>
    </section>
    <div class="limit-box fl-wrap"></div>
</div>
@endsection
