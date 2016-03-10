<?php
    use App\Country;
    $iso = Session::get('currency','USD');
    $countries = Country::all();

    $rates = file_get_contents('http://api.fixer.io/latest?base=USD');
    $iso_list = json_decode($rates,true)['rates'];
    
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Yoga World Retreats'</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Yoga World Retreats'" />
    <meta name="keywords" content="Yoga , Book Yoga retreats , tours and travel">
    <meta name="author" content="Prateek Chandan" />
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
    <link href="/asset/css/main.css" rel="stylesheet" type="text/css" />
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
</head>

<body class="travel_home">
{{--
    <!--Page loading start-->
    <div class="travel_page_loader">
        <div class="travel_loading_bar_wrapper">
            <div class="travel_loading_bar">
                <span class="from"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.053,4.626c6.334,0,11.488,5.166,11.488,11.514c0,6.35-5.153,11.515-11.488,11.515c-6.335,0-11.489-5.166-11.489-11.515C3.564,9.792,8.718,4.626,15.053,4.626 M15.053,1.26c-8.201,0-14.849,6.661-14.849,14.881c0,8.22,14.849,32.359,14.849,32.359s14.849-24.14,14.849-32.359S23.255,1.26,15.053,1.26z M17.197,21.558v1.444h1.701V6.772h-7.69V7.7h6.876v1.186h-6.876v14.115h1.776v-1.443L17.197,21.558L17.197,21.558z M15.718,10.146h2.292v2.298h-2.292V10.146z M15.7,14.108h2.292v2.299H15.7V14.108z M15.7,18.037h2.292v2.295H15.7V18.037z M12.133,10.146h2.292v2.298h-2.292V10.146z M12.114,14.108h2.292v2.299h-2.292V14.108z M12.114,20.333v-2.295h2.292v2.295H12.114z M17.197,23.188v-0.186h-4.213v0.186H8.695v1.631h12.717v-1.631H17.197z"/></svg></span>
                <span class="to">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.001,3.636c6.369,0,11.55,5.193,11.55,11.577c0,6.383-5.181,11.58-11.55,11.58c-6.372,0-11.551-5.197-11.551-11.58C3.45,8.829,8.629,3.636,15.001,3.636 M15.001,0.25C6.753,0.25,0.07,6.952,0.07,15.213c0,8.265,14.931,32.537,14.931,32.537s14.93-24.272,14.93-32.537C29.931,6.952,23.244,0.25,15.001,0.25z M13.871,20.894l1.182-0.003V20.88h-0.005l0.005-0.038V20.62c-0.013-0.187,0-1.001,0-1.001c-0.118-1.364-0.671-3.527-2.869-4.981c-0.042-0.025-1.077-0.676-1.439-2.202c-0.355-1.505,0.07-3.29,1.265-5.305c-1.594,1.002-2.658,2.775-2.658,4.803c0,1.745,0.795,3.307,2.034,4.343c0,0,0.39,0.301,0.506,0.378C14.083,18.362,13.871,20.894,13.871,20.894z M17.594,14.451c0.013-0.002,1.19-0.681,1.269-2.161c0.086-1.549-0.23-3.436-1.508-5.498C16.72,6.497,16.02,6.32,15.283,6.283v12.016C15.612,17.022,15.927,15.552,17.594,14.451z M11.364,12.256c0.082,1.476,1.257,2.156,1.27,2.161c1.666,1.102,1.983,2.571,2.312,3.847V6.248c-0.738,0.036-1.436,0.214-2.071,0.508C11.6,8.819,11.282,10.707,11.364,12.256z M17.354,6.787v0.004l0.031,0.012L17.354,6.787z M18.113,7.107c1.295,2.104,1.836,3.727,1.465,5.288c-0.357,1.523-1.395,2.176-1.438,2.201c-2.14,1.412-2.718,3.504-2.856,4.873v1.423h1.237c0,0-0.03-2.824,1.757-4.35c1.617-1.093,2.369-2.708,2.369-4.606C20.646,9.819,19.823,8.08,18.113,7.107z M15.252,20.911h0.032v-0.02h-0.031L15.252,20.911z M13.695,24.404h3.116v-3.116h-3.116V24.404z"/></svg></span>
                <div class="travel_loading_bar_overlay" style="width:0%;">
                    <span class="pointer"><img src="/asset/images/icon/loading_plane.svg" alt="" /></span>
                    <span class="pointer_val">0%</span>
                </div>
            </div>
        </div>
    </div>
--}}
    <!--Page loading end-->
    <!--Page main section start-->
    <div id="travel_wrapper">
        <!--Header start-->
        <header id="header_wrapper">
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p>
                                <a href="{{url('')}}"><b style="font-size: 1.5em">Yoga World Retreats'</b></a>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="top_menu">
                                <ul>{{--
                                    <li><a href="#"><i class="fa fa-globe"></i> Languages</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">German</a></li>
                                        </ul>
                                    </li>
                                    --}}
                                    <li><a href="#">Blog</a></li>
                                    @if(Auth::guest())
                                    <li><a href="{{url('login')}}">Login/Signup</a></li>
                                    @else
                                    <li><a href="#">{{Auth::user()->name}}</a>
                                         <ul class="sub-menu">
                                            <li><a href="{{route('home')}}">Account</a></li>
                                            @if(Auth::user()->business!=NULL)
                                                <li><a href="{{route('business.show')}}">Business</a></li>
                                            @endif
                                            <li><a href="{{url('logout')}}">Logout</a></li>
                                         </ul>
                                    </li>
                                    @endif
                                    <li><a href="#">{{$iso}}</a>
                                        <ul class="sub-menu">
                                            @foreach($iso_list as $iso => $val)
                                            <li><a href="{{url('/')}}/currency/{{$iso}}">{{$iso}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!--Header end-->
        <!--content body start-->
        <div id="content_wrapper">

            @yield('content')
        </div>
        <!--content body end-->
        <!--footer start-->
        <footer id="footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <aside class="widget widget_text">
                            <a href="#"><b>Yoga World Retreats'</b></a>
                            <p>In 2016, We launched Yoga World Retreats'</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a> </aside>
                        
                    </div>
                    <div class="col-md-4">
                        <aside class="widget widget_recent_entries">
                            <h4 class="widget-title">Recent Posts</h4>
                            <ul>
                                <li> 
                                    <div>
                                        <p>Nunc cursus libero purus ac congue arcu cursus..</p>
                                        <a href="#">Read More</a> </div>
                                </li>
                                <li> 
                                    <div>
                                        <p>Nunc cursus libero purus ac congue arcu cursus..</p>
                                        <a href="#">Read More</a> </div>
                                </li>
                            </ul>
                        </aside>
                       
                    </div>
                    <div class="col-md-4">
                         <aside class="widget widget_links">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms and Privacy</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </aside>
                       
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6"> <span>Stay Connected with Us - </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
                    <div class="col-md-6 col-sm-6 text-right"> <span>Yoga World Retreats@2016. All Right Reserved</span> </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page main section end-->
    <!--main js file start-->
    <script type="text/javascript" src="/asset/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/asset/js/bootstrap.js"></script>
    <script type="text/javascript" src="/asset/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="/asset/js/plugin/datetimepicker/jquery.datetimepicker.js"></script>
    <script type="text/javascript" src="/asset/js/plugin/parallax/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="/asset/js/plugin/owl/owl.carousel.js"></script>
    <script type="text/javascript" src="/asset/js/plugin/isotope/jquery.isotope.js"></script>
    <script type="text/javascript" src="/asset/js/plugin/bxslider/jquery-bxslider.js"></script>
    <!-- pie chart js -->
    <script type="text/javascript" src="/asset/js/plugin/pie-circle/circles.js"></script>
    <!-- pie chart js -->
    <!--counter js-->
    <script type="text/javascript" src="/asset/js/plugin/counter/jquery.countTo.js">
    </script>
    <!--counter js-->
    <script type="text/javascript" src="/asset/js/plugin/counter/jquery.countdown.js">
    </script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/jquery.themepunch.tools.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/jquery.themepunch.revolution.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/revolution.extension.actions.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/revolution/js/revolution.extension.parallax.min.js">
    </script>
    <!-- REVOLUTION JS FiLES -->
    <!-- video_popup -->
    <script type="text/javascript" src="/asset/js/plugin/video-popup/jquery.magnific-popup.js">
    </script>
    <!-- video_popup -->
    <!-- slick slider -->
    <script type="text/javascript" src="/asset/js/plugin/slick/jquery-migrate-1.2.1.min.js">
    </script>
    <script type="text/javascript" src="/asset/js/plugin/slick/slick.min.js"></script>
    <!-- slick slider -->
    <!-- video player js -->
    <script src="/asset/js/plugin/video_player/mediaelement-and-player.min.js"></script>
    <!-- video player js -->
    <!-- pricefilter -->
    <script src="/asset/js/plugin/jquery-ui/jquery-ui.js"></script>
    <!-- pricefilter-->
    <script type="text/javascript" src="/asset/js/custom.js"></script>
    <!--main js file end-->

    @yield('script')
</body>

</html>