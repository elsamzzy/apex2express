<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ __('Apex2express') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="{{ __('Apex2express Shipping and Logistics Company, Tracking of Parcels and delivery all over the globe') }}" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simpleLightbox.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>

<!-- banner -->
<div class="banner">
    <div class="banner-dott">
        <!-- Top-Bar -->
        <div class="top">
            <div class="container">

                <div class="col-md-6 top-left">
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +021 365 777</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> 132 New Lenox, 868 1st Avenue </li>
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
                            <h1><a class="navbar-brand" href="index.html">{{ __('Apex2Express') }}</a></h1>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-15" id="cl-effect-15">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.html">{{ __('Home') }}</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-hover="Services" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('Services') }}<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="icons.html">{{ __('All Services') }}</a></li>
                                            <li><a href="typography.html">{{ __('Ocean Freight') }}</a></li>
                                            <li><a href="typography.html">{{ __('Logistics') }}</a></li>
                                            <li><a href="typography.html">{{ __('Air Freight') }}</a></li>
                                            <li><a href="typography.html">{{ __('Cargo Express') }}</a></li>
                                            <li><a href="typography.html">{{ __('Warehousing') }}</a></li>
                                            <li><a href="typography.html">{{ __('Custom Brokerage') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">{{ __('About Us') }}</a></li>
                                    <li><a href="services.html">{{ __('Track Your Shipment') }}</a></li>
                                    <li><a href="contact.html">{{ __('Contact') }}</a></li>
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
                <p>{{ __('Apex2express is a Top branded Logistics company, We specialize in packaging, Tracking and Delivery of around the globe') }}</p>
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
                    <li><span>Office Phone :</span> (+123) 2302 232</li>
                    <li><span>Fax :</span> (+123) 123 456 455</li>
                </ul>
            </div>
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>Address</h3>
                <p>132 New Lenox, 868 1st Avenue <i>4th United States.</i></p>
            </div>
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>send a message</h3>
                <ul>
                    <li><span>Email :</span> <a href="mailto:info@example.com">info@example1.com</a></li>
                    <li><span>Enquiry :</span> <a href="mailto:info@enquiry.com">info@enquiry.com</a></li>
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
                <h3>Subscribe Now</h3>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email" required="">
                    <input type="submit" value="Submit ">
                </form>
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
        <p>© 2021 Apex2Express. All rights reserved</p>
    </div>
</div>
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{ __('Apex2Express') }}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/1.jpg') }}" alt=" " class="img-responsive" />
                <p>Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam,
                    nisi ut aliquid ex ea commodi consequatur? Quis autem
                    vel eum iure reprehenderit qui in ea voluptate velit
                    esse quam nihil molestiae consequatur, vel illum qui
                    dolorem eum fugiat quo voluptas nulla pariatur.
                    <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur.</i></p>
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
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
</body>
</html>

