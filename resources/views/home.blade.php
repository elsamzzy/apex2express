@extends('layouts.app')

@section('content')
    <!-- clients -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Track Your Parcel') }}</h2>
            <div class="w3l-about-grids">
                <div class="input-group">
                    <input type="text" placeholder="Tracking Number" class="form-control" aria-label="...">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false">Track</button>
                    </div><!-- /btn-group -->
                </div><!-- /input-group -->
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Welcome') }}</h2>
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
                            <p>{{ __('Apex2Express Shipping Company constantly monitors each movement of shipment form the collection point to the delivery destination. Our vehicles are equipped with GPS satellite tracking devices that able us to check their position regularly. Updates are sent to our Clients at the time of collection, while goods are in transit and at delivery. Any issues or delays incurred in-route are being reported.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>{{ __('FAST AND FLEXIBLE') }}</h5>
                            <p>{{ __('Apex2Express Shipping Company prides ourselves on our flexibility and quality of service. We can adapt our services to fit any unusual or specific requirements. We can also offer same-day deliveries subject to negation and practicality. In addition to our international air service, we now offer a full European road service to provide you with the best possible service for your money.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>{{ __('COMPLIANCE SOLUTION') }}</h5>
                            <p>{{ __('We ensure export compliance and smooth delivery right to your door. At Apex2Express Shipping Company, we treat every package as if it were our own, and that means doing everything we can to help ensure fast, compliant delivery of purchases. We understand different challenges when shipping, and our member-devoted support team is prepared to answer your compliance, duty, and tax questions to make international shipping worry-free.') }}</p>
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
            <h3 class="w3l-titles">{{ __('Our Services') }}</h3>
            <p class="w3layouts_dummy_para">{{ __('Our services are very reliable for all our esteemed customers') }}</p>
            <div class="col-md-6 w3_two_grid_right">
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Custom Brokerage') }}</h4>
                        <a href="#"><p>{{ __('When your business relies on imported goods, you need to work with a shipping services company that can get your merchandise through customs in a timely manner. Apex2Express Shipping Company is made up of a team of highly-experienced customs brokers and entry writers. allowing them to foresee and avoid potential obstacles to customs clearance.') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-clone" aria-hidden="true"></i>
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
                            <i class="fa fa-external-link" aria-hidden="true"></i>
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
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Ocean Freight') }}</h4>
                        <a href="#"><p>{{ __('Apex2Express Shipping Company offers worldwide ocean freight transport solutions, both for import and export and for every type of shipment, also for dangerous goods. Dedicated contact persons will organize your shipments in a container or conventionally/in break bulk.') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-9 w3_two_grid_right_gridr">
                        <h4>{{ __('Logistics') }}</h4>
                        <a href="#"><p>{{ __('Whatever it is, wherever it needs to go, however, it needs to get there, Apex2Express Shipping Company can help you run your logistics on time and on budget') }}</p></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3_two_grid_right1">
                    <div class="col-xs-3 w3_two_grid_right_grid">
                        <div class="w3_two_grid_right_grid1">
                            <i class="fa fa-square-o" aria-hidden="true"></i>
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

    <!-- Clients -->
    <div class="clients">
        <div class="banner-dott1">
            <h3 class="w3l-titles">{{ __('Testimonials') }}</h3>
            <div class="container">
                <h4>{{ __('What Our Customers Say') }}</h4>
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('img/c1.jpg') }}" alt="" />
                                <p>{{ __('I want to thank Apex2Express Shipping Company so much for their excellent customer service and top-notch skills that made shipping my freight a smooth experience. You went above and beyond typical customer service and you are commended for keeping me informed throughout the transaction and taking the time to assure that I was getting the best and most cost-effective service available.') }}</p>
                                <div class="client">
                                    <h5>{{ __('Gerald Roy') }}</h5>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('img/c2.jpg') }}" alt="" />
                                <p>{{ __('I have been extremely happy with the service that I have received from Apex2Express Shipping Company. The attention that I have received is exceptional. Kioko has been particularly attentive. His follow up to any of my questions has been very prompt and always presented in a very professional manner. Charles has also been very helpful. I would gladly recommend Apex2Express Shipping Company to my peers. It is a pleasure to deal with such an exceptionally professional company!”') }}</p>
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
