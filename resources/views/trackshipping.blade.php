@extends('layouts.app')

@section('content')

    <!-- clients -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Track Your Parcel') }}</h2>
            <div class="w3l-about-grids">
                <form action="{{ route('track') }}" method="post">
                    <div class="input-group">
                        <input type="text" placeholder="Tracking Number" class="form-control" aria-label="...">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false">{{ __('Track') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
