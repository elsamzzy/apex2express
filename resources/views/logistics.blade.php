@extends('layouts.app')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Cargo Express') }}</h2>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <p>{{ __('Our corporate courier services are a top-notch choice as we have built a stable relationship with leading organizations that are now in partnership with us. ') }} <br>&nbsp<br> {{ __('Our services can be booked on demand and can be expedited at the highest level with precision, reliability and professionalism.') }}<br><br>{{ __('Our experts handle every aspect of your corporate logistics planning and you’ll receive a fair cost plan that meets your service requirements. Our services can assist businesses across multiple industries. We have a dedicated team who are cognizant that our corporate patrons depend on our shipping services with every pick-up and drop off service from the moment they call and thereby assured that their same-day, freights, or parcels will be delivered on time.') }}<br>{{ __('We have a national network and international delivery expertise to provide the high-level support required by corporate businesses. We handle large volume of goods for shipment to major destinations throughout the world and provide warehousing solutions for receiving, and delivering your goods.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img" style="background: url({{ asset('img/m4.jpg') }}) !important; background-size: cover !important;">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
