@extends('layouts.app')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Air Freight') }}</h2>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <p>{{ __('Airfreight is often the most suitable method of transport for urgent or time-sensitive consignments. We understand that speed and reliability are of the essence. But how affordable is getting your parcel abroad? That is why we have designed our Economy Air freight package to assist you in shipping parcel across the globe.') }}<br><br>{{ __('Our Air Cargo Service has the capacity to handle all types of cargoes and isn’t limited to size. Irrespective of where you want to ship your item to, Apex2Express Shipping Company Air Freight Services has what it takes to get it there fast.') }}<br><br>{{ __('Air Freight services terminate at the destination airport where local handling & customs charges may apply.') }}<br>{{ __('If you require delivery to door at the destination you will need an International Courier quotes.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <h5 class="text-center" style="color: #f1a70c">{{ __('AIR FREIGHT OPTIONS') }}</h5>
                            <ul class="list-group">
                                <li class="list-group-item-warning">{{ __('Options include time-definite delivery with one- and two-day transit times, and day-definite delivery for less urgent shipments.') }}</li>
                                <li class="list-group-item-warning">{{ __('Shipping options include Door-to-Door, Door-to-Airport, Airport-to-Door, and Airport-to-Airport.') }}</li>
                                <li class="list-group-item-warning">{{ __('More economical Air freight choices are available depending on the size and speed of your chosen method.') }}</li>
                                <li class="list-group-item-warning">{{ __('Hanging garment distribution') }}</li>
                                <li class="list-group-item-warning">{{ __('Cargo insurance for all types of transports') }}</li>
                                <li class="list-group-item-warning">{{ __('Customs clearance services for both imports and exports, in Constanta and Bucharest') }}</li>
                                <li class="list-group-item-warning">{{ __('Warehousing and distribution service') }}</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img" style="background: url({{ asset('img/m6.jpg') }}) !important; background-size: cover !important;">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
