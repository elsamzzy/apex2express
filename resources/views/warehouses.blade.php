@extends('layouts.app')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Warehousing') }}</h2>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <p>{{ __('Warehousing is an essential component in any supply chain. PathBird Shipping Company warehousing facilities are flexible in size and easy to equip, thus allowing us to accommodate individual requirements such as temperature-controlled storage or advanced security systems.') }} <br>&nbsp<br>
                                {{ __('Our priority is always to select sites with the set-up you need, located within easy access of both, your facilities and established transport routes. This allows us to meet the fast turn-around times requested of exemplary warehouse operations. Our main services cover:') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <h5 style="color: #f1a70c">{{ __('Our main services cover:') }}</h5>
                            <ul class="list-group">
                                <li class="list-group-item-warning">{{ __('Order processing and fulfillment') }}</li>
                                <li class="list-group-item-warning">{{ __('Pick and pack') }}</li>
                                <li class="list-group-item-warning">{{ __('Special handling') }}</li>
                                <li class="list-group-item-warning">{{ __('Inventory visibility within the warehouses') }}</li>
                                <li class="list-group-item-warning">{{ __('Warehouse and inventory management') }}</li>
                                <li class="list-group-item-warning">{{ __('Bonded warehousing') }}</li>
                                <li class="list-group-item-warning">{{ __('High-end security capabilities') }}</li>
                                <li class="list-group-item-warning">{{ __('Sales and Credit administration') }}</li>
                                <li class="list-group-item-warning">{{ __('Cross docking') }}</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img" style="background: url({{ asset('img/m1.jpg') }}) !important; background-size: cover !important;">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
