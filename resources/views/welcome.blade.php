@extends('layouts.app')

@section('content')
<div class="slider_tab_main">
    <!-- Home first slider start -->

    <div class="full_width home_slider">
        <div class="example">
            <div class="content" style="width:100%; float:left;">
                <div id="rev_slider_116_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="layer-animations" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="rev_slider_116_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul style="width:100% !important;" class="home_3_slide">
                            <!-- SLIDE  -->
                            <li data-index="rs-391" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Smooth Mask" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="/asset/images/slide1.jpg" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="slider_heading_wrap">
                                    <div class="tp-caption NotGeneric-Title slideheading  tp-resizeme" id="slide-391-layer-1" data-x="100" data-hoffset="" data-y="center" data-voffset="-30" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:left;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style=" z-index: 8;">
                                        <p style="font-size:100px; line-height:60px;" class="best_text">Yoga</p>
                                        <p style="font-size:50px; line-height:60px;">Retreats and</p>
                                        <p style="font-size:100px; line-height:60px;">Vacation</p>


                                    </div>

                                    <!-- LAYER NR. 4 -->
                                </div>
                            </li>
                            <!--slide-->
                            <li data-index="rs-392" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide Mask" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="/asset/images/slide2.jpg" alt="slide3" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYER NR. 1 -->
                                <div class="slider_heading_wrap">
                                    <div class="tp-caption NotGeneric-Title slideheading  tp-resizeme" id="slide-392-layer-1" data-x="100" data-hoffset="" data-y="center" data-voffset="-30" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:left;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style=" z-index: 8;">
                                        <p style="font-size:100px; line-height:60px;" class="best_text">Yoga</p>
                                        <p style="font-size:50px; line-height:60px;">Retreats and</p>
                                        <p style="font-size:100px; line-height:60px;">Vacation</p>


                                    </div>
                                    <!-- LAYER NR. 3 -->

                                </div>
                            </li>
                            <!--slide-->
                        </ul>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
        <!-- section end -->
    </div>
    <!-- Home first slider End -->
    <!-- slider booking section  start -->
    <div class="full_width tour_booking_panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_panel_wrapper_main">
                        <div class="destination_tab width_30">
                            <select class="form-control selectpicker" data-live-search="true" id="search_destination">
                                        <option value="1">All Destination</option>
                                        <optgroup>Africa &amp; Middle East</optgroup>
                                        <option>Egypt</option>
                                        <option>Insrael</option>
                                        <option>Jordan</option>
                                        <option>Kenya</option>
                                        <option>Morocco</option>
                                        <optgroup>Africa &amp; Middle East</optgroup>
                                        <option>Egypt</option>
                                        <option>Insrael</option>
                                        <option>Jordan</option>
                                        <option>Kenya</option>
                                        <option>Morocco</option>

                                      </select>
                            <i class="fa fa-caret-down"></i>
                        </div>

                        <div class="destination_tab width_30">
                            <select class="form-control selectpicker" data-live-search="true" id="search_categories">
                                          <option>All Categories</option>
                                          <option>Budget Retreats</option>
                                          <option>Luxury Holidays</option>
                                          <option>Short Breaks and Weekends</option>
                                          <option>Yoga Meditation Retreats</option>
                                          <option>Yoga Teacher Training</option>
                                          <option>Beginner Courses</option>
                                          <option>Popular for Couples</option>
                                          <option>Popular for Families</option>
                                          <option>Popular for Men</option>
                                          <option>Popular for Women</option>
                                        </select>
                            <i class="fa fa-caret-down"></i>
                        </div>

                        <div class="checking_tab width_30">
                            <input type="text" placeholder="Check-In-Date" id="booking_checkin_date">
                            <i class="fa fa-calendar"></i>
                        </div>


                        <div class="destination_tab width_30">
                            <select class="form-control selectpicker" data-live-search="true" id="search_categories">
                                          <option>All Yoga Styles</option>
                                          <option>Anusara Yoga</option>
                                          <option>Ashtanga Yoga</option>
                                          <option>Ayurveda Yoga</option>
                                          <option>Bikram / Hot Yoga</option>
                                          <option>Hatha Yoga</option>
                                          <option>Iyengar Yoga</option>
                                          <option>Kundalini Yoga</option>
                                          <option>Tantra Yoga</option>
                                          <option>Vinyasa Yoga</option>
                                          <option>Yin Yoga</option>
                                          <option>Dynamic Yoga</option>
                                          <option>General Yoga</option>
                                          <option>Integral yoga</option>
                                          <option>Jivamukti Yoga</option>
                                          <option>Kripalu Yoga</option>
                                          <option>Kriya Yoga</option>
                                          <option>Nidra Yoga</option>
                                          <option>Power Yoga</option>
                                          <option>Restorative Yoga</option>
                                          <option>Sivananda Yoga</option>
                                        </select>
                            <i class="fa fa-caret-down"></i>
                        </div>

                        <div class="booking_search_tab">
                            <input type="submit" value="search" id="booking_search">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- slider booking section  end -->
</div>


<div class="full_width travelite_world_section">
    <div class="container">
        <div class="row">
            <div class="travelite_destinaion_main">
                <div class="heading_team">
                    <h3>Popular Retreats</h3>
                    <p></p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="sorting_places_wrap grid_sorting">
                        <div class="top_head_bar">
                            <h4><a href="#">8 Days Yoga Trail Week in Portugal</a></h4>
                            <div><b>Omassim</b></div>
                        </div>
                        <div class="thumb_wrape">
                            <img src="/asset/images/tour-grid/tour-grid3.jpg" alt="Grid pic">
                        </div>
                        <div class="bottom_desc">
                            <div>Available from March till December</div>
                            <h5>Starting from<span>$1000 /</span>per person</h5>
                            <!-- desc icons Start-->
                            <a href="#" class="btn btn-success">View Details</a>
                            <hr>
                            <div class="bottom_review_rating">
                                <div class="rating_bottom">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="review_right"><i class="fa fa-thumbs-up"></i> 52 Reviews</span>

                            </div>
                            <!-- desc icons End-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="sorting_places_wrap grid_sorting">
                        <div class="top_head_bar">
                            <h4><a href="#">8 Days Yoga Trail Week in Portugal</a></h4>
                            <div><b>Omassim</b></div>
                        </div>
                        <div class="thumb_wrape">
                            <img src="/asset/images/tour-grid/tour-grid3.jpg" alt="Grid pic">
                        </div>
                        <div class="bottom_desc">
                            <div>Available from March till December</div>
                            <h5>Starting from<span>$1000 /</span>per person</h5>
                            <!-- desc icons Start-->
                            <a href="#" class="btn btn-success">View Details</a>
                            <hr>
                            <div class="bottom_review_rating">
                                <div class="rating_bottom">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="review_right"><i class="fa fa-thumbs-up"></i> 52 Reviews</span>

                            </div>
                            <!-- desc icons End-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="sorting_places_wrap grid_sorting">
                        <div class="top_head_bar">
                            <h4><a href="#">8 Days Yoga Trail Week in Portugal</a></h4>
                            <div><b>Omassim</b></div>
                        </div>
                        <div class="thumb_wrape">
                            <img src="/asset/images/tour-grid/tour-grid3.jpg" alt="Grid pic">
                        </div>
                        <div class="bottom_desc">
                            <div>Available from March till December</div>
                            <h5>Starting from<span>$1000 /</span>per person</h5>
                            <!-- desc icons Start-->
                            <a href="#" class="btn btn-success">View Details</a>
                            <hr>
                            <div class="bottom_review_rating">
                                <div class="rating_bottom">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="review_right"><i class="fa fa-thumbs-up"></i> 52 Reviews</span>

                            </div>
                            <!-- desc icons End-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="sorting_places_wrap grid_sorting">
                        <div class="top_head_bar">
                            <h4><a href="#">8 Days Yoga Trail Week in Portugal</a></h4>
                            <div><b>Omassim</b></div>
                        </div>
                        <div class="thumb_wrape">
                            <img src="/asset/images/tour-grid/tour-grid3.jpg" alt="Grid pic">
                        </div>
                        <div class="bottom_desc">
                            <div>Available from March till December</div>
                            <h5>Starting from<span>$1000 /</span>per person</h5>
                            <!-- desc icons Start-->
                            <a href="#" class="btn btn-success">View Details</a>
                            <hr>
                            <div class="bottom_review_rating">
                                <div class="rating_bottom">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="review_right"><i class="fa fa-thumbs-up"></i> 52 Reviews</span>

                            </div>
                            <!-- desc icons End-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="sorting_places_wrap grid_sorting">
                        <div class="top_head_bar">
                            <h4><a href="#">8 Days Yoga Trail Week in Portugal</a></h4>
                            <div><b>Omassim</b></div>
                        </div>
                        <div class="thumb_wrape">
                            <img src="/asset/images/tour-grid/tour-grid3.jpg" alt="Grid pic">
                        </div>
                        <div class="bottom_desc">
                            <div>Available from March till December</div>
                            <h5>Starting from<span>$1000 /</span>per person</h5>
                            <!-- desc icons Start-->
                            <a href="#" class="btn btn-success">View Details</a>
                            <hr>
                            <div class="bottom_review_rating">
                                <div class="rating_bottom">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="review_right"><i class="fa fa-thumbs-up"></i> 52 Reviews</span>

                            </div>
                            <!-- desc icons End-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="sorting_places_wrap grid_sorting">
                        <div class="top_head_bar">
                            <h4><a href="#">8 Days Yoga Trail Week in Portugal</a></h4>
                            <div><b>Omassim</b></div>
                        </div>
                        <div class="thumb_wrape">
                            <img src="/asset/images/tour-grid/tour-grid3.jpg" alt="Grid pic">
                        </div>
                        <div class="bottom_desc">
                            <div>Available from March till December</div>
                            <h5>Starting from<span>$1000 /</span>per person</h5>
                            <!-- desc icons Start-->
                            <a href="#" class="btn btn-success">View Details</a>
                            <hr>
                            <div class="bottom_review_rating">
                                <div class="rating_bottom">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="review_right"><i class="fa fa-thumbs-up"></i> 52 Reviews</span>

                            </div>
                            <!-- desc icons End-->
                        </div>
                    </div>
                </div>


            </div>
            <!-- travelite_destinaion_main end -->

        </div>
    </div>
</div>


<div class="full_width home_subscribe_section">
    <div class="icon_circle_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe_middle_part">
                    <h3>Wanna Know Our Latest Offers and Deals Just Subcscribe Here</h3>
                    <div class="sbuscribe_widget_middle">
                        <input type="text" placeholder="ENTER YOUR EMAIL ID HERE" class="send_email">
                        <input type="submit" class="submit_subscribe">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
