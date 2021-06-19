@extends('layouts.app')

@section('content')

    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ $track->tracking_number }}</h2>
            <div class="w3l-about-grids">
                <div class="row">
                    <div class="col-md-12" style="padding-top: 15px;">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> {{ __('Forwarder Unique Way Bill ID:') }} {{ $track->track_id }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <table class="table tablesorter" id="">
                                        <thead class="text-primary" style="background-color: black; border-radius: 10em;">
                                        <tr class="col-2">
                                            <th>
                                               <b> {{ __('Tracking Number: ') }} {{ $track->tracking_number }}</b>
                                            </th>
                                            <th>
                                                <b>{{ __('Time Made: ') }} {{ $track->created_at->diffForHumans() }}</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <b>{{ __('Status: ') }} <p style="color: green"> {{ $status['shipping_info'] }}</p></b>
                                            </td>
                                            <td>
                                                <b>{{ __('Expected Delivery Date: ') }} {{ $track->date }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>{{ __('Origin: ') }} {{ $track->origin }}</b>
                                            </td>
                                            <td class="text-center">
                                                <b>{{ __('Destination: ') }} {{ $track->destination }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>{{ __('Shipment Mode: ') }} {{ $track->mode }}</b>
                                            </td>
                                            <td>
                                               <b> {{ __('Weight(Kg): ') }} {{ $track->weight }}</b>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> {{ __('Shipper Information') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <table class="table tablesorter" id="">
                                        <thead class="text-primary" style="background-color: black; border-radius: 10em;">
                                        <tr>
                                            <th class="text-center">
                                                <b>{{ __('Shipper Information') }}</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                               <b> {{ __('Shipper Name: ') }} {{ $track->shipper_name }}</b>
                                            </td>
                                            <td class="text-center">
                                                <b>{{ __('Shipper Phone: ') }} {{ $track->shipper_phone }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                               <b> {{ __('Shipper Address: ') }}{{ $track->shipper_address ?? ""}}</b>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> {{ __('Consignee Information') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <table class="table tablesorter" id="">
                                        <thead class="text-primary" style="background-color: black; border-radius: 10em;">
                                        <tr>
                                            <th class="text-center">
                                                <b>{{ __('Consignee Information') }}</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <b> {{ __('Consignee Name: ') }} {{ $track->consignee_name }}</b>
                                            </td>
                                            <td class="text-center">
                                                <b>{{ __('Consignee Address: ') }} {{ $track->consignee_address }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <b> {{ __('Booking Mode: ') }}{{ $track->booking_mode ?? ""}}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <b> {{ __('Consignee Phone: ') }}{{ $track->consignee_phone ?? ""}}</b>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding-top: 15px;">
                        <div class="card  card-plain">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Shipping history about') }} {{ $track->tracking_number }}</h4></div>
                            <div class="card-body">
                                <div class="">
                                    <table class="table tablesorter" id="">
                                        <thead class=" text-primary" style="background-color: black; border-radius: 10em;">
                                        <tr>
                                            <th>
                                               <b> {{ __('Shipping Delivery Status') }}</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $value)
                                            <tr>
                                                <td>
                                                   <b> {{ __('Expected Date Of Delivery: ') }} {{ $track->date }}</b>
                                                </td>
                                                <td>
                                                   <b>Status: {{ $value->shipping_info }}</b>
                                                </td>
                                                <td>
                                                    <b>Description: {{ $value->description }}</b>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10" style=" border-radius: 25em;padding-top: 15px; background-color: black">
                        <div class="card  card-plain">
                            <div class="card-header">
                            </div>
                            <div class="card-body" >
                                <h4 style="color: white" >{{ __('Forwarder Unique Way Bill ID:') }} {{ $track->track_id }}</h4>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
