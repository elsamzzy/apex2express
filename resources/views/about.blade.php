@extends('layouts.app')

@section('content')

    <!-- about -->
    <!-- main-textgrids -->
    <div class="main-textgrids">
        <div class="container">
            <div class="w3ls-heading">
                <h2 class="w3l-titles">{{ __('About Us') }}</h2>
                <p class="w3layouts_dummy_para">{{ __('Fast International Cargo Services') }}</p>
            </div>
            <div class="ab-agile">
                <div class="col-md-5 ab-pic">
                    <img src="{{ asset('img/g1.jpg') }}" alt=" " />
                </div>
                <div class="col-md-7 ab-text">
                    <h4>{{ __('Who We Are') }}</h4>
                    <p>{{ __('Apex2Express Shipping Company is one of the largest independent courier company, with an enviable reputation for delivering high quality, flexible, and cost-effective services to its clients.') }}<br>{{ __('The business was founded over 29 years ago and operates a fleet of more than 60 vehicles, from environmentally efficient push bikes for city centre courier work, to motorcycles, small vans, and large vans and up to HGV Lorries. Our family-run business values hard work, respect, commitment, and teamwork. Our workplace is characterized by the high energy, enthusiasm, and effort of our employees who thrive in this positive environment. We are committed to providing our customers with the first-rate service, which starts with our employees’ dedication to our enterprise of services.') }}</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="statements">
                <div class="col-md-7 mission">
                    <h4>{{ __('What We Do') }}</h4>
                    <p>{{ __('More than just a shipping company, Apex2Express Shipping Company has developed a range of specialist shipping services for those looking for a total delivery solutions partner. Whether you are a multi-site corporation, a public sector organization, or a small local business, we have a solution to help improve efficiency and reduce cost. Be it a bespoke courier solution or an off the peg delivery service the answer is always Apex2Express Shipping Company.') }}<br>{{ __('Our exceedingly high levels of customer service combined with substantial investment in industry-leading technology ensure that Apex2Express Shipping Company stands out as a clear leader in the Sameday Courier and Medical Courier market place.  With online booking, real-time satellite tracking, electronic vehicle allocation, and real-time electronic signature capture your consignments are tracked from collection to delivery. With quality and environmental management systems certified by UKAS accredited body, our clients can be sure that every consignment will be handled with the utmost professionalism and consideration for the environment. Ensuring our client’s peace of mind is at the very heart of our service offering!') }}</p>
                </div>
                <div class="col-md-5 facts">
                    <img src="{{ asset('img/g4.jpg') }}" alt=" " />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //main-textgrids -->
    <!-- different -->
    <div class="different">
        <div class="container">
            <div class="w3l-heading">
                <h3 class="w3l-titles">Why We are Different</h3>
            </div>

            <div class="w3agile-different-info">
                <ul class="list-group">
                    <li class="list-group-item-warning"><h5>{{ __('CUSTOMER SATISFACTION') }}</h5><br>{{ __('We have helped clients throughout every industry.  Our corporate clients know that they can trust us with even the most sensitive of material because they know we deliver on our promises, providing nothing but the best. We always exceed our customer’s expectations. ') }}</li>
                    <li class="list-group-item-warning"><h5>{{ __('MONITORING AND REPORTING') }}</h5><br>{{ __('Apex2Express Shipping Company constantly monitors each movement of shipment form the collection point to the delivery destination. Our vehicles are equipped with GPS satellite tracking devices that able us to check their position regularly. Updates are sent to our Clients at the time of collection, while goods are in transit and at delivery. Any issues or delays incurred in-route are being reported. ') }}</li>
                    <li class="list-group-item-warning"><h5>{{ __('FAST AND FLEXIBLE') }}</h5><br>{{ __('Apex2Express Shipping Company prides ourselves on our flexibility and quality of service. We can adapt our services to fit any unusual or specific requirements. We can also offer same-day deliveries subject to negation and practicality. In addition to our international air service, we now offer a full European road service to provide you with the best possible service for your money. ') }}</li>
                    <li class="list-group-item-warning"><h5>{{ __('COMPLIANCE SOLUTIONS') }}</h5><br>{{ __('We ensure export compliance and smooth delivery right to your door. At Apex2Express Shipping Company, we treat every package as if it were our own, and that means doing everything we can to help ensure fast, compliant delivery of purchases. We understand different challenges when shipping, and our member-devoted support team is prepared to answer your compliance, duty, and tax questions to make international shipping worry-free. ') }}</li>
                </ul>
                <div class="w3agile-button">
                    <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //different -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <div class="w3ls-heading">
                <h3 class="w3l-titles">Team</h3>
                <p class="w3layouts_dummy_para">Morbi in dui pretium, finibus sapien vel.</p>
            </div>
            <div class="agileinfo-team-grids">
                <div class="col-md-3 wthree-team-grid">
                    <img src="{{ asset('img/t1.jpg') }}" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>Mary Jane</h4>
                        <p>{{ __('President Director') }}</p>
                    </div>
                </div>
                <div class="col-md-3 wthree-team-grid">
                    <img src="{{ asset('img/t2.jpg') }}" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>Peter Parke</h4>
                        <p>{{ __('Operational Manager') }}</p>
                    </div>
                </div>
                <div class="col-md-3 wthree-team-grid">
                    <img src="{{ asset('img/t3.jpg') }}" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>Jennifer Watson</h4>
                        <p>{{ __('Finance Director') }}</p>
                    </div>
                </div>
                <div class="col-md-3 wthree-team-grid">
                    <img src="{{ asset('img/t4.jpg') }}" alt="">
                    <div class="wthree-team-grid-info">
                        <h4>Steven Wilson</h4>
                        <p>{{ __('Marketing Director') }}</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- //about -->

@endsection
