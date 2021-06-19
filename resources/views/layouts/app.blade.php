<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="{{ $description }}" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style_v2.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simpleLightbox.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>

<!-- banner -->
<div class="@if(Request::url() === url('/')) banner @else banner-1 @endif">
    <div class="banner-dott">
        <!-- Top-Bar -->
        <div class="top">
            <div class="container">

                <div class="col-md-6 top-left">
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>+1 4052253354</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Head Office: 104 Kohler St, Nashville, AR 71852 </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Branch Office: 617, W Patti Page Blvd CLAREMORE OK 74017 </li>
                    </ul>
                </div>
                <div class="col-md-6 top-middle">
                    <ul>
                        <li><a href="JavaScript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="JavaScript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="JavaScript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="JavaScript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="top-bar">
            <div class="container">
                <div class="header">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">{{ __('Toggle Menu') }}</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="{{ route('home') }}"><img class="navbar-brand" src="{{ asset('img/logo.png') }}" alt="{{ __('apex2xpress') }}" style="width: 353px; height: 174px" /></a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-15" id="cl-effect-15">
                                <ul class="nav navbar-nav">
                                    <li @if(Request::url() === url('/')) class="active" @endif><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                                    <li class="dropdown @if(Request::url() === url('/services') OR Request::url() === url('/custom') OR Request::url() === url('/warehouses') OR Request::url() === url('/cargo-express') OR Request::url() === url('/ocean-freight') OR Request::url() === url('/logistics') || Request::url() === url('/air-freight') ) active @endif">
                                        <a class="dropdown-toggle" data-hover="Services" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Services') }}<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li @if(Request::url() === url('/services')) class="active" @endif><a href="{{ route('services') }}">{{ __('All Services') }}</a></li>
                                            <li @if(Request::url() === url('/ocean-freight')) class="active" @endif><a href="{{ route('oceanfreight') }}">{{ __('Ocean Freight') }}</a></li>
                                            <li @if(Request::url() === url('/logistics')) class="active" @endif><a href="{{ route('logistics') }}">{{ __('Logistics') }}</a></li>
                                            <li @if(Request::url() === url('/air-freight')) class="active" @endif><a href="{{ route('airfreight') }}">{{ __('Air Freight') }}</a></li>
                                            <li @if(Request::url() === url('/cargo-express')) class="active" @endif><a href="{{ route('cargoexpress') }}">{{ __('Cargo Express') }}</a></li>
                                            <li @if(Request::url() === url('/warehouses')) class="active" @endif><a href="{{ route('warehouses') }}">{{ __('Warehousing') }}</a></li>
                                            <li @if(Request::url() === url('/custom')) class="active" @endif><a href="{{ route('custom') }}">{{ __('Custom Brokerage') }}</a></li>
                                        </ul>
                                    </li>
                                    <li @if(Request::url() === url('/about')) class="active" @endif><a href="{{ route('about') }}">{{ __('About Us') }}</a></li>
                                    <li @if(Request::url() === url('/track')) class="active" @endif><a href="{{ route('track') }}">{{ __('Track Your Shipment') }}</a></li>
                                    <li @if(Request::url() === url('/contact')) class="active" @endif><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                </ul>

                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- //Top-Bar -->
        @if(Request::url() === url('/'))
            <!-- w3-banner -->
            <div class="w3-banner">
                <div id="typer"></div>
                <p>{{ __('apex2xpress is a Top branded Logistics company, We specialize in packaging, Tracking and Delivery of around the globe') }}</p>
            </div>
        @endif
        <!-- //w3-banner -->
    </div>
</div>
<!-- //banner -->
@yield('content')

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileits_w3layouts_footer_grids">
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>Call Us Now</h3>
                <ul>
                    <li><span>Office Phone :</span> (+1) 4052253354</li>
                </ul>
            </div>
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>Head Office: </h3>
                <p>104 Kohler St, Nashville, AR 71852</i></p><br>
                <h3>Branch Office: </h3>
                <p>617 W Patti Page Blvd, CLAREMORE OK 74017</p>
            </div>
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>send a message</h3>
                <ul>
                    <li><span>Email :</span> <a href="mailto:info@apex2xpress.com">info@apex2xpress.com</a></li>
                    <li><span>Enquiry :</span> <a href="mailto:info@apex2xpress.com">info@apex2xpress.com</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3_agileits_footer_grids">
            <div class="col-md-4 w3_agileits_footer_grid">
                <p>{{ __('We help you transport freight faster, cheaper, safer, and easier, so you can stay focused on your business. Join thousands of businesses making the right shipping decisions with our all-in-one intelligent freight platform. We help you transport freight faster, cheaper, safer, and easier, so you can stay focused on your business.') }}</p>
            </div>
            <div class="col-md-4 w3_agileits_footer_grid">
                <h3>Hours Work</h3>
                <h4>Offices are opened</h4>
                <ul>
                    <li><span>Mon - Fri : </span> 9:00 AM to 5:00PM</li>
                    <li><span>Sat : </span> 10:00 AM to 3:00PM</li>
                </ul>
            </div>
            <div class="col-md-4 w3_agileits_footer_grid">
                <h3>Partners</h3>
                <img src="{{ asset('img/y3.jpg')}}" alt="Partners" />
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="wthree_copy_right copyright">
    <div class="container">
        <div class="copyrighttop">
            <ul>
                <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <p>© <script>
                        document.write(new Date().getFullYear())
                    </script> apex2xpress. All rights reserved</p>
    </div>
</div>
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{ __('apex2xpress') }}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/1.jpg') }}" alt=" " class="img-responsive" />
                <ul class="list-group" style="margin-top: 5px;">
                    <li class="list-group-item-warning"><h5>{{ __('CUSTOMER SATISFACTION') }}</h5>{{ __('We have helped clients throughout every industry.  Our corporate clients know that they can trust us with even the most sensitive of material because they know we deliver on our promises, providing nothing but the best. We always exceed our customer’s expectations. ') }}</li><br>
                    <li class="list-group-item-warning"><h5>{{ __('MONITORING AND REPORTING') }}</h5>{{ __('apex2xpress Shipping Company constantly monitors each movement of shipment form the collection point to the delivery destination. Our vehicles are equipped with GPS satellite tracking devices that able us to check their position regularly. Updates are sent to our Clients at the time of collection, while goods are in transit and at delivery. Any issues or delays incurred in-route are being reported. ') }}</li><br>
                    <li class="list-group-item-warning"><h5>{{ __('FAST AND FLEXIBLE') }}</h5>{{ __('apex2xpress Shipping Company prides ourselves on our flexibility and quality of service. We can adapt our services to fit any unusual or specific requirements. We can also offer same-day deliveries subject to negation and practicality. In addition to our international air service, we now offer a full European road service to provide you with the best possible service for your money. ') }}</li><br>
                    <li class="list-group-item-warning"><h5>{{ __('COMPLIANCE SOLUTIONS') }}</h5>{{ __('We ensure export compliance and smooth delivery right to your door. At apex2xpress Shipping Company, we treat every package as if it were our own, and that means doing everything we can to help ensure fast, compliant delivery of purchases. We understand different challenges when shipping, and our member-devoted support team is prepared to answer your compliance, duty, and tax questions to make international shipping worry-free. ') }}</li><br>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //bootstrap-modal-pop-up -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<script src='{{ asset('js/jquery.typer.js') }}'></script>
<script>
    var win = $(window),
        foo = $('#typer');

    foo.typer(['Trucking and Freight Transport', 'GREAT OCEAN FREIGHT', 'STRONG LOGISTICS SYSTEM', 'ADVANCE AIR FREIGHT', 'TOP CARGO EXPRESS', 'BEST WAREHOUSING' , 'CUSTOM BROKERAGE']);

    // unneeded...
    win.resize(function(){
        var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

        foo.css({
            fontSize: fontSize * .8 + 'px'
        });
    }).resize();
</script>
@if(session('sent'))
    <script>
        setInterval(function() {
            var element =  document.getElementById('message');
            var fadeTarget = document.getElementById("message");
            if (typeof(element) != 'undefined' && element != null)
            {
                if (!fadeTarget.style.opacity) {
                    fadeTarget.style.opacity = 1;
                }
                if (fadeTarget.style.opacity > 0) {
                    fadeTarget.style.opacity -= 0.1;
                }
            }
        }, 300);
    </script>
@endif
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
</body>
</html>

