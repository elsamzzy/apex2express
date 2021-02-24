@extends('layouts.app')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Custom Brokerage') }}</h2>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <p>{{ __('Apex2Express Shipping Company specializes in customs clearance services, offering customs clearing services for imports and exports through Airport and Sea Ports. All of our state offices are managed by approved Customs Brokers and well-experienced professionals. We offer full clearance and entry services, regardless of the transport mode, with great quality and 24/7 support.') }} <br>&nbsp<br>
{{ __('Apex2Express Shipping Company is made up of a team of highly-experienced customs brokers. Our brokers are licensed through the US Customs and Border Protection agency and are well-versed in tariff and customs laws, allowing them to foresee and avoid potential obstacles to customs clearance. With the help of a customs broker, you will have an assurance that your goods will reach you just in time with no extra hassle.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-right">
                            <h2 class="text-center" style="color: #f1a70c">{{ __('Customs Clearance') }}</h2>
                            <p>{{ __('Customs clearance is a highly specialized field. To negotiate the best outcomes for export and import cargo, in-depth working knowledge of local in-country customs regulations, quarantine rules, currency, and jurisdictional mining legislation and resource sector concessions is required.') }}<br><br>{{ __('Apex2Express Shipping Company, you are guaranteed a logistics partner who is knowledgeable and confident with the experience to provide you with the right information to make informed decisions on how best to import or export your cargo while fulfilling all statutory requirements. Further, we liaise with the relevant licensing authorities in order to obtain the required approval for the import of projects or special cargo. We have also served clients that import cargo under differing conditions (Tax & duty exempted, Imports under BOI regulations) & are currently working on projects that are of national importance.') }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img" style="background: url({{ asset('img/m5.jpg') }}) !important; background-size: contain !important;">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
