@extends('layouts.app')

@section('content')

    <!-- contact -->
    <section class="contact-w3ls">
        <div class="container">
            <div class="wthree-heading">
                <h2 class="w3l-titles">{{ __('Contact Us') }}</h2>
                <p class="quia">{{ __('Get In Touch With Us') }}</p>
            </div>
            <div class="con-top">
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                    <div class="contact-agileits">
                        <h4>Get In Touch</h4>
                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Full Name:</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" Placeholder="Your Full Name" required="" value="{{ old('name') }}">
                                    <p class="help-block"></p>
                                    @error('name')
                                        <p class="is-invalid" style="color: red"> {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Phone Number:</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" Placeholder="Your Mobile Number" required="" value="{{ old('phone') }}">
                                    <p class="help-block"></p>
                                    @error('phone')
                                        <p class="is-invalid" style="color: red"> {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Email Address:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" Placeholder="Your Email Address" required="" value="{{ old('email') }}">
                                    <p class="help-block"></p>
                                </div>
                                @error('email')
                                    <p class="is-invalid" style="color: red"> {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Your Message:</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message">{{ old('message') }}</textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            @error('message')
                                <p class="is-invalid" style="color: red"> {{ $message }}</p>
                            @enderror
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                    <h4 class="w3l-contact">Connect With Us</h4>
                    <p class="contact-agile1"><strong>Phone :</strong> +1 4052253354</p>
                    <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">info@apex2xpress.com</a></p>
                    <p class="contact-agile1"><strong>Head Office :</strong> 104 Kohler St, Nashville, AR 71852</p>
                    <p class="contact-agile1"><strong>Branch Office :</strong> 617 W Patti Page Blvd, CLAREMORE OK 74017</p>

                    <ul class="agileits_social_list">
                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    @if(session('sent'))
        <center>
            <div id='message' data-notify='container' class='col-xs-11 col-sm-4 alert alert-info alert-with-icon align-items-center' role='alert' data-notify-position='top-center' style='display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 2s; z-index: 10600; top: 20px; left: 0px; right: 0px; background-color: yellowgreen'>
                <span data-notify='title'></span>
                <span data-notify='message'>{{ session('sent') }}</span>
            </div>
        </center>
    @endif
@endsection
