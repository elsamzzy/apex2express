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
                            <p>{{ __('Our strong side is our express transport services. We are capable of providing completed express transport services. In a very short time, we are able to load the goods on an appropriate vehicle and immediately head out to the designated location. ') }} <br></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <h2 class="text-center" style="color: #f1a70c">{{ __('Contact us today') }}</h2>
                            </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img" style="background: url({{ asset('img/m2.jpg') }}) !important; background-size: cover !important;">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
