@extends('layouts.app')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Ocean Freight') }}</h2>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <p>{{ __('As a registered and licensed Non-Vessel Operating Common Carrier (NVOCC) and a third-party logistics provider (3PL), we can offer our clients competitive ocean freight rates. Not having to maintain ships or equipment means we can negotiate the best rates, helping you save as much freight cost as possible. Our alliances with major global and regional carriers provide you with multiple, flexible, and convenient ocean shipping options to locations around the world. From general merchandise and specialized cargo like automobiles, perishable freight, hazardous goods to oversized and overweight cargo, we can help you determine the best routing for your shipments.') }} <br></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <h5 style="color: #f1a70c">{{ __('Our Ocean Freight Services Include:') }}</h5>
                            <ul class="list-group">
                                <li class="list-group-item-warning">{{ __('Door-to-door transportation') }}</li>
                                <li class="list-group-item-warning">{{ __('Full Container Load (FCL)') }}</li>
                                <li class="list-group-item-warning">{{ __('Less-than-Container Load (LCL)') }}</li>
                                <li class="list-group-item-warning">{{ __('Break-bulk (BB)') }}</li>
                                <li class="list-group-item-warning">{{ __('Roll On – Roll Off (Ro/Ro)') }}</li>
                                <li class="list-group-item-warning">{{ __('Vessel Chartering (Full or Split)') }}</li>
                                <li class="list-group-item-warning">{{ __('Barge Freight Services') }}</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <h5 style="color: #0000ff">{{ __('Our Ocean Freight Services Include:') }}</h5>
                            <ul class="list-group">
                                <li class="list-group-item-warning">{{ __('Customs Clearance') }}</li>
                                <li class="list-group-item-warning">{{ __('Trade Advisory Services') }}</li>
                                <li class="list-group-item-warning">{{ __('Letters of Credit') }}</li>
                                <li class="list-group-item-warning">{{ __('Marine Cargo Insurance') }}</li>
                                <li class="list-group-item-warning">{{ __('Pickup and Delivery') }}</li>
                                <li class="list-group-item-warning">{{ __('Consolidation / Deconsolidation') }}</li>
                                <li class="list-group-item-warning">{{ __('Cross Docking, Packing and Crating') }}</li>
                                <li class="list-group-item-warning">{{ __('Warehouse and Distribution') }}</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img" style="background: url({{ asset('img/m3.jpg') }}) !important; background-size: cover !important;">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
