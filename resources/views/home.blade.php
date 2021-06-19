@extends('layouts.app')

@section('content')
    <!-- clients -->
    <div class="about">
        <div class="">
            <h4 style="color: #f1a70c; font-size: 3em;">{{ __('Welcome To apex2xpress') }}</h4>
            <p>&nbsp;</p>
            <p>apex2xpress Logistics company is considered to be the leading supplier to the transportation industry in Canada.apex2xpress Logistics company Service has forged long term (wholesale) relationships / partnerships with all the major airlines, express courier integrators, worldwide Logistics companyer networks, charter airlines, trucking systems and logistics suppliers. Based on our significant shipping volumes, we are in a position to offer preferential pricing and superior service to you, our important and valued customer.</p>
            <p>&nbsp;</p>
            <a href="{{ route('about') }}"><button class="btn btn-primary" >{{ __('Read More') }}</button></a>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="services-bottom stats services">
        <div class="banner-dott1">
        </div>
    </div>

    <!-- clients -->
    <div class="about">
        <div class="container">
            <h2 style="color: #f1a70c; font-size: 3em; text-align: center; margin-bottom: 1.3em; position: relative;">{{ __('Track Your Parcel') }}</h2>
            <div class="w3l-about-grids">
                <form action="{{ route('track') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" placeholder="Tracking Number" name="tracking_id" class="form-control" aria-label="...">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default" aria-haspopup="true" aria-expanded="false">{{ __('Track') }}</button>
                        </div>
                    </div>
                    @error('tracking_id')
                    <center>
                            <span class="is-invalid text-center" role="alert" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                    </center>
                    @enderror
                    @if(session('fail'))
                        <center>
                            <span class="is-invalid text-center" role="alert" style="color: red">
                                <strong>{{ session('fail') }}</strong>
                            </span>
                        </center>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <div class="services-bottom stats services">
        <div class="banner-dott1">
        </div>
    </div>

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 style="color: #f1a70c; font-size: 3em; text-align: center; margin-bottom: 1.3em; position: relative;">{{ __('Welcome') }}</h2>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>{{ __('100% SATISFIED CUSTOMERS') }}</h5>
                            <p>{{ __('We have helped clients throughout every industry.  Our corporate clients know that they can trust us with even the most sensitive of material because they know we deliver on our promises, providing nothing but the best. We always exceed our customer’s expectations. ') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>{{ __('MONITORING & REPORTING') }}</h5>
                            <p>{{ __('apex2xpress Shipping Company constantly monitors each movement of shipment form the collection point to the delivery destination. Our vehicles are equipped with GPS satellite tracking devices that able us to check their position regularly. Updates are sent to our Clients at the time of collection, while goods are in transit and at delivery. Any issues or delays incurred in-route are being reported.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>{{ __('FAST AND FLEXIBLE') }}</h5>
                            <p>{{ __('apex2xpress Shipping Company prides ourselves on our flexibility and quality of service. We can adapt our services to fit any unusual or specific requirements. We can also offer same-day deliveries subject to negation and practicality. In addition to our international air service, we now offer a full European road service to provide you with the best possible service for your money.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>{{ __('COMPLIANCE SOLUTION') }}</h5>
                            <p>{{ __('We ensure export compliance and smooth delivery right to your door. At apex2xpress Shipping Company, we treat every package as if it were our own, and that means doing everything we can to help ensure fast, compliant delivery of purchases. We understand different challenges when shipping, and our member-devoted support team is prepared to answer your compliance, duty, and tax questions to make international shipping worry-free.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- counter -->
    <div class="services-bottom stats services">
        <div class="banner-dott1">
            <div class="container">
                <div class="wthree-agile-counter">
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">324</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Transport</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">543</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">434</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>People Loved</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="fa fa-trophy" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">234</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Win Awards</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //counter -->
    <!-- advantages -->
    <div class="two-grids">
        <div class="container">
            <h3 style="color: #f1a70c; font-size: 3em; text-align: center; margin-bottom: 1.3em; position: relative;">{{ __('Our Services') }}</h3>
            <p class="w3layouts_dummy_para">{{ __('Our services are very reliable for all our esteemed customers') }}</p>
            <div class="col-md-6 w3_two_grid_right">
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Custom Brokerage') }}</h4>
                        <a href="#"><p>{{ __('When your business relies on imported goods, you need to work with a shipping services company that can get your merchandise through customs in a timely manner. apex2xpress Shipping Company is made up of a team of highly-experienced customs brokers and entry writers. allowing them to foresee and avoid potential obstacles to customs clearance.') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Warehousing') }}</h4>
                        <a href="#"> <p>{{ __('We have top class warehousing facilities. Our warehouses are spacious, well guarded, and spread everywhere in the country to provide assistants to our clients. We give the utmost care to your goods when they are in transit. We take proper attention to your essential goods until they reach their desired destination.') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-road" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Cargo Express') }}</h4>
                        <a href="#"><p>{{ __('Our strong side is our express transport services. We are capable of providing completed express transport services. In a very short time, we are able to load the goods on an appropriate vehicle and immediately head out to the designated location. ') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-6 w3_two_grid_right">
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-anchor" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Ocean Freight') }}</h4>
                        <a href="#"><p>{{ __('apex2xpress Shipping Company offers worldwide ocean freight transport solutions, both for import and export and for every type of shipment, also for dangerous goods. Dedicated contact persons will organize your shipments in a container or conventionally/in break bulk.') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-square" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Logistics') }}</h4>
                        <a href="#"><p>{{ __('Whatever it is, wherever it needs to go, however, it needs to get there, apex2xpress Shipping Company can help you run your logistics on time and on budget') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-plane" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Air Freight') }}</h4>
                        <a href="#"><p>{{ __('Working with carefully selected carriers, we operate with schedules on all the world’s major routes so you can plan with certainty and become more efficient. We offer a range of secure and highly flexible air shipping products, which allow a choice of delivery speeds to best suit your requirements.') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //advantages -->

    <div class="services-bottom stats services">
        <div class="banner-dott1">
        </div>
    </div>

    <div class="two-grids">
        <div class="container">
            <h3 style="color: #f1a70c; font-size: 3em; text-align: center; margin-bottom: 1.3em; position: relative;">{{ __('Our Gallery') }}</h3>
            <p class="w3layouts_dummy_para">{{ __('Check out our Gallery ') }}</p>
            <div class="col-md-12">
                <div class="w3ls_gallery_grids">
                    <div class="col-md-4 w3_agile_gallery_grid">
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g1.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g1.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g2.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g2.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g3.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g3.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3_agile_gallery_grid">
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g4.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g4.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g5.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g5.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g6.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g6.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3_agile_gallery_grid">
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g7.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g7.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g8.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g8.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="agile_gallery_grid">
                            <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{ asset('img/g9.jpg') }}">
                                <div class="agile_gallery_grid1">
                                    <img src="{{ asset('img/g9.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3layouts_gallery_grid1_pos">
                                        <h3>apex2xpress</h3>
                                        <p> Logistics Company</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="clients">
        <div class="banner-dott1">
            <h3 style="color: #f1a70c; font-size: 3em; text-align: center; margin-bottom: 1.3em; position: relative;">{{ __('Testimonials') }}</h3>
            <div class="container">
                <h4>{{ __('What Our Customers Say') }}</h4>
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('img/c1.jpg') }}" alt="" />
                                <p>{{ __('I want to thank apex2xpress Shipping Company so much for their excellent customer service and top-notch skills that made shipping my freight a smooth experience. You went above and beyond typical customer service and you are commended for keeping me informed throughout the transaction and taking the time to assure that I was getting the best and most cost-effective service available.') }}</p>
                                <div class="client">
                                    <h5>{{ __('Gerald Roy') }}</h5>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('img/c2.jpg') }}" alt="" />
                                <p>{{ __('I have been extremely happy with the service that I have received from apex2xpress Shipping Company. The attention that I have received is exceptional. Kioko has been particularly attentive. His follow up to any of my questions has been very prompt and always presented in a very professional manner. Charles has also been very helpful. I would gladly recommend apex2xpress Shipping Company to my peers. It is a pleasure to deal with such an exceptionally professional company!”') }}</p>
                                <div class="client">
                                    <h5>{{ __('Adam Brandom') }}</h5>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('img/c3.jpg') }}" alt="" />
                                <p>{{ __('I could honestly say that I had a great experience using your services. After submitting a request for a quote I was contacted in less than 24 hours by an agent, who took care of everything else for us. Your agent was very efficient, courteous, and provided the best rate for our shipment. He also kept in touch with me until the shipment was ready for pick up.') }}</p>
                                <div class="client">
                                    <h5>{{ __('Steve Artur') }}</h5>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('img/c4.jpg') }}" alt="" />
                                <p>{{ __('Shipping made easy and quick, pleasant, personnel, and competitive pricing are all part of my experience using') }}</p>
                                <div class="client">
                                    <h5>{{ __('Martin Victor') }}</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //Clients -->
@endsection
