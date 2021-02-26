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
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Full Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" Placeholder=" " required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Phone Number:</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" Placeholder=" " required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Email Address:</label>
                                    <input type="email" class="form-control" name="email" id="email" Placeholder=" " required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                    <h4 class="w3l-contact">Connect With Us</h4>
                    <p class="contact-agile1"><strong>Phone :</strong> +1 (100)222-23-33</p>
                    <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">info@example.com</a></p>
                    <p class="contact-agile1"><strong>Address :</strong> 132 New Lenox, 868 1st Avenue,4th United States.</p>

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

@endsection
