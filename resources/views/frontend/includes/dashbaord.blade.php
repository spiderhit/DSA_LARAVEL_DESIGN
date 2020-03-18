<div class="col-md-3">
    <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
    <div class="clearfix"></div>
    <div class="fixed-bar fl-wrap" id="dash_menu">
        <div class="user-profile-menu-wrap fl-wrap block_box">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Main</h3>
                <ul class="no-list-style">
                    <li><a href="{{url('dashboard')}}" class="user-profile-act"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                    <!-- <li><a href="dashboard-feed.html"><i class="fal fa-rss"></i>Your Feed <span>7</span></a></li> -->
                    <li><a href="{{url('edit_profile')}}"><i class="fal fa-user-edit"></i> Edit profile</a></li>
                    <!-- <li><a href="dashboard-messages.html"><i class="fal fa-envelope"></i> Messages <span>3</span></a></li> -->
                    <li><a href="{{url('change_password')}}"><i class="fal fa-key"></i>Change Password</a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Listings</h3>
                <ul class="no-list-style">
                    <!-- <li><a href="dashboard-listing-table.html"><i class="fal fa-th-list"></i> My listigs  </a></li> -->
                    <li><a href="dashboard-bookings.html"> <i class="fal fa-calendar-check"></i> Bookings <span>2</span></a></li>
                    <!-- <li><a href="dashboard-review.html"><i class="fal fa-comments-alt"></i> Reviews </a></li>
                    <li><a href="dashboard-add-listing.html"><i class="fal fa-file-plus"></i> Add New</a></li> -->
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <button class="logout_btn color2-bg">Log Out <i class="fas fa-sign-out"></i></button>
        </div>
    </div>
    <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Back to Menu<i class="fas fa-caret-up"></i></a>
</div>
