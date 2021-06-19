@extends('layouts.app')

@section('content')

    <div class="services">
        <div class="container">
            <div class="w3-agileits-heading">
                <h2 class="w3l-titles">Our Services</h2>
            </div>
            <div class="wthree-services-grids">
                <a href="{{ route('custom') }}">
                    <div class="col-sm-6 wthree-services">
                        <div class="wthree-services-grid">
                            <div class="wthree-services-info">
                                <i class="fa fa-truck-oo" aria-hidden="true"></i>
                                <h4>{{ __('Custom Brokerage') }}</h4>
                                <div class="w3ls-border"> </div>
                            </div>
                            <div class="wthree-services-captn">
                                <h4>{{ __('Custom Brokerage') }}</h4>
                                <p>{{ __('When your business relies on imported goods, you need to work with a shipping services company that can get your merchandise through customs in a timely manner. apex2xpress Shipping Company is made up of a team of highly-experienced customs brokers and entry writers. allowing them to foresee and avoid potential obstacles to customs clearance.') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('warehouses') }}">
                    <div class="col-sm-6 wthree-services">
                        <div class="wthree-services-grid">
                            <div class="wthree-services-info">
                                <i class="fa fa-home-oo" aria-hidden="true"></i>
                                <h4>{{ __('Warehousing') }}</h4>
                                <div class="w3ls-border"> </div>
                            </div>
                            <div class="wthree-services-captn">
                                <h4>{{ __('Warehousing') }}</h4>
                                <p>{{ __('We have top class warehousing facilities. Our warehouses are spacious, well guarded, and spread everywhere in the country to provide assistants to our clients. We give the utmost care to your goods when they are in transit. We take proper attention to your essential goods until they reach their desired destination. ') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('cargoexpress') }}">
                    <div class="col-sm-6 wthree-services">
                        <div class="wthree-services-grid">
                            <div class="wthree-services-info">
                                <i class="fa fa-rocket-oo" aria-hidden="true"></i>
                                <h4>{{ __('Cargo Express') }}</h4>
                                <div class="w3ls-border"> </div>
                            </div>
                            <div class="wthree-services-captn">
                                <h4>{{ __('Cargo Express') }}</h4>
                                <p>{{{ __('Our strong side is our express transport services. We are capable of providing completed express transport services. In a very short time, we are able to load the goods on an appropriate vehicle and immediately head out to the designated location. ') }}}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('oceanfreight') }}">
                    <div class="col-sm-6 wthree-services">
                        <div class="wthree-services-grid">
                            <div class="wthree-services-info">
                                <i class="fa fa-angle-double-right-oo" aria-hidden="true"></i>
                                <h4>{{ __('Ocean Freight') }}</h4>
                                <div class="w3ls-border"> </div>
                            </div>
                            <div class="wthree-services-captn">
                                <h4>{{ __('Ocean Freight') }}</h4>
                                <p>{{ __('apex2xpress Shipping Company offers worldwide ocean freight transport solutions, both for import and export and for every type of shipment, also for dangerous goods. Dedicated contact persons will organize your shipments in a container or conventionally/in breakbulk.') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="clearfix"> </div>
            </div>
            <div class="wthree-services-grids services-grids1">
                <a href="{{ route('logistics') }}">
                    <div class="col-sm-6 wthree-services">
                        <div class="wthree-services-grid">
                            <div class="wthree-services-info">
                                <i class="fa fa-bell-oo" aria-hidden="true"></i>
                                <h4>{{ __('Logistics') }}</h4>
                                <div class="w3ls-border"> </div>
                            </div>
                            <div class="wthree-services-captn">
                                <h4>{{ __('Logistics') }}</h4>
                                <p>{{ __('Whatever it is, wherever it needs to go, however, it needs to get there, apex2xpress Shipping Company can help you run your logistics on time and on budget') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('airfreight') }}">
                    <div class="col-sm-6 wthree-services">
                        <div class="wthree-services-grid">
                            <div class="wthree-services-info">
                                <i class="fa fa-plane-oo" aria-hidden="true"></i>
                                <h4>{{ __('Air Freight') }}</h4>
                                <div class="w3ls-border"> </div>
                            </div>
                            <div class="wthree-services-captn">
                                <h4>{{ __('Air Freight') }}</h4>
                                <p>{{ __('Working with carefully selected carriers, we operate with schedules on all the world’s major routes so you can plan with certainty and become more efficient. We offer a range of secure and highly flexible air shipping products, which allow a choice of delivery speeds to best suit your requirements. ') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="agileits-about-top">
        <div class="container">
            <div class="w3-agileits-heading">
                <h3 class="w3l-titles">What we are</h3>
            </div>
            <div class="agileinfo-top-grids">
                <div class="col-sm-6 wthree-top-grid">
                    <img src="{{{ asset('img/g2.jpg') }}}" alt="" />
                    <h4>{{ __('Who We Are') }}</h4>
                    <p>{{ __('apex2xpress Shipping Company is one of the largest independent courier company, with an enviable reputation for delivering high quality, flexible, and cost-effective services to its clients.') }} <br> {{ __('The business was founded over 29 years ago and operates a fleet of more than 60 vehicles, from environmentally efficient push bikes for city centre courier work, to motorcycles, small vans, and large vans and up to HGV Lorries. Our family-run business values hard work, respect, commitment, and teamwork. Our workplace is characterized by the high energy, enthusiasm, and effort of our employees who thrive in this positive environment. We are committed to providing our customers with the first-rate service, which starts with our employees’ dedication to our enterprise of services.') }}</p>
                </div>
                <div class="col-sm-6 wthree-top-grid">
                    <img src="{{ asset('img/g3.jpg') }}" alt="" />
                    <h4>{{ __('What We Do') }}</h4>
                    <p>{{ __('More than just a shipping company, apex2xpress Shipping Company has developed a range of specialist shipping services for those looking for a total delivery solutions partner. Whether you are a multi-site corporation, a public sector organization, or a small local business, we have a solution to help improve efficiency and reduce cost. Be it a bespoke courier solution or an off the peg delivery service the answer is always apex2xpress Shipping Company.') }}</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection
