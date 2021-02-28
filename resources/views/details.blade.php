@extends('layouts.app')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ $track->name }}{{ __('_') }}{{ $track->id }}</h2>
            <div class="w3l-about-grids">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> {{ __('Details about') }} {{ $track->name }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter " id="">
                                        <thead class="text-primary">
                                        <tr>
                                            <th class="text-center">
                                                {{ __('Tracking ID') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Mode') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Size') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Date Created') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Date Last Updated') }}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                {{ $track->name }}{{ __('_') }}{{ $track->id }}
                                            </td>
                                            <td class="text-center">
                                                {{ $track->mode }}
                                            </td>
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
                                                {{ $track->created_at->diffForHumans() }}
                                            </td>
                                            <td class="text-center">
                                                {{ $updated->diffForHumans() }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding-top: 5px;">
                        <div class="card  card-plain">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('History about') }} {{ $track->name }} {{ __('|') }} {{ $track->track_id }}</h4></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter" id="">
                                        <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                {{ __('Shipping info') }}
                                            </th>
                                            <th>
                                                {{ __('Description') }}
                                            </th>
                                            <th>
                                                {{ __('Time Updated') }}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $value)
                                            <tr>
                                                <td>
                                                    {{ $value->shipping_info }}
                                                </td>
                                                <td>
                                                    {{ $value->description }}
                                                </td>
                                                <td>
                                                    {{ $value->created_at->diffForHumans() }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->

@endsection
