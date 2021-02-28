@extends('layouts.app')

@section('content')

    <!-- clients -->
    <div class="about">
        <div class="container">
            <h2 class="w3l-titles">{{ __('Track Your Parcel') }}</h2>
            <div class="w3l-about-grids">
                <form action="{{ route('track') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" placeholder="Tracking Number" name="tracking_id" class="form-control" aria-label="...">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default" aria-haspopup="true" aria-expanded="false">{{ __('Track') }}</button>
                        </div>
                    </div>
                    @error('tracking_id')
                        <center>
                            <span class="is-invalid text-center" role="alert" style="color: red">
                                <strong>{{ $message }}</strong>
                            </span>
                        </center>
                    @enderror
                    @if(session('fail'))
                        <center>
                            <span class="is-invalid text-center" role="alert" style="color: red">
                                <strong>{{ session('fail') }}</strong>
                            </span>
                        </center>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection
