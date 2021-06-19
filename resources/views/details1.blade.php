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
                                            <!---
                                            <th class="text-center">
                                                {{ __('Mode') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Size') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Origin') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Destination') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Weight(Kg)') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Arrival Date') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Date Created') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Date Last Updated') }}
                                            </th>
                                            -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <b>{{ __('Status: ') }} <p style="color: green"> {{ $status->shipping_info }}</p></b>
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
                                        <!--
                                        <tr>
                                            <td class="text-center">
                                                @if($track->size == 's')
                                                    {{ __('Small') }}
                                                @elseif($track->size == 'm')
                                                    {{ __('Medium') }}
                                                @elseif($track->size == 'l')
                                                    {{ __('Large') }}
                                                @elseif($track->size == 'xl')
                                                    {{ __('Extra Large') }}
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                {{ $track->origin }}
                                            </td>
                                            <td class="text-center">
                                                {{ $track->destination }}
                                            </td>
                                            <td class="text-center">
                                                {{ $track->weight }}
                                            </td>
                                            <td class="text-center">
                                                {{ $track->date }}
                                            </td>
                                            <td class="text-center">
                                                {{ $track->created_at->diffForHumans() }}
                                            </td>
                                            <td class="text-center">
                                                {{ $updated->diffForHumans() }}
                                            </td>
                                        </tr>
                                        -->
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
                                            <!--
                                            <th class="text-center">
                                                {{ __('Shipper Address') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Shipper Phone') }}
                                            </th>
                                            -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                               <b> {{ __('Shipper name: ') }} {{ $track->name }}</b>
                                            </td>
                                            <td class="text-center">
                                                <b>{{ __('Shipper Address: ') }} {{ $track->destination }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                               <b> {{ __('Booking Mode: ') }}{{ $track->booking_mode ?? ""}}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                               <b> {{ __('Shipper Email: ') }}{{ $track->receiver_email ?? ""}}</b>
                                            </td>
                                            <td class="text-center">
                                                <b>{{ __('Shipper Phone: ') }} {{ $track->receiver_phone_number ?? "" }}</b>
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
                                            <!--
                                            <th>
                                                {{ __('Description') }}
                                            </th>
                                            <th>
                                                {{ __('Time Updated') }}
                                            </th>
                                            -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $value)
                                            <tr>
                                                <td>
                                                   <b> {{ __('Expected Date Of Delivery: ') }} {{ $track->date }}</b>
                                                </td>
                                                <td>
                                                   <b> {{ $value->description }}</b>
                                                </td>
                                                <td>
                                                   <b> {{ $value->created_at->diffForHumans() }}</b>
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
