@extends('layouts.common')
@section('title', 'Ganesan Enterprises - About')
@section('main-content')
<?php 
    $pageid="contact";
?>



    <!--Page Title-->
    <section class="page-title" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/contact.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- Page Info
                                            <section class="page-info">
                                                <div class="auto-container clearfix">
                                                    <div class="pull-left"><h2>Contact Us</h2></div>
                                                    <div class="pull-right">
                                                        <ul class="bread-crumb clearfix">
                                                            <li><a href="/">Home</a></li>
                                                            <li>Contact Us</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section> -->

    <!--Contact Section-->
    <section id="contact-section" class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Form Column -->
                <div class="column form-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sec-title medium">
                        <h2>Send Message Us</h2>
                    </div>
                    <!--form-box-->
                    <div class="form-box default-form">
                        <div class="contact-form default-form">
                            <form method="post" action="/Formsubmit">
                                @csrf
                                <div class="row clearfix">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        @error('username')
                                            <h6 class="mb-2" style="color:red;margin-bottom:5px;">Please enter your name</h6>
                                        @enderror
                                        <input type="text" name="username" value="{{old('username')}}" placeholder="Your Name *" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        @error('email')
                                            <h6 class="mb-2" style="color:red;margin-bottom:5px;">Please enter your email</h6>
                                        @enderror
                                        <input id="email" type="email" name="email" value="{{old('email')}}" placeholder="Your Mail *" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        @error('phone')
                                            <h6 class="mb-2" style="color:red;margin-bottom:5px;">Please enter your mobile number</h6>
                                        @enderror
                                        <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone Number" onkeypress="return isNumberKey(event);" pattern="[0-9]{10}" maxlength="10" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        @error('subject')
                                            <h6 class="mb-2" style="color:red;margin-bottom:5px;">Please select your product</h6>
                                        @enderror
                                        <select name="subject" required>
                                            <option class="hidden">Subject</option>
                                            <option>Mattress</option>
                                            <option>Pillows</option>
                                            <option>Bed Linen</option>
                                            <option>Sleep Accessories</option>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                        <textarea name="message" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two btn-style-two1">Get Quote</button>
                                    </div>


                                </div>

                                @if (session()->get('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Mail!</strong> Sent Successfully.
                                    </div>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column info-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sec-title medium">
                        <h2>Contact Details</h2>
                    </div>
                    <!-- <div class="desc-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto quod dolores minus iusto blanditiis excepturi accusamus consequatur a consectetur. Corporis dolorem voluptates sapiente totam fugit odio autem vitae vero soluta!</div> -->
                    <div class="info-style-one">
                        <ul>
                            <li>
                                <div class="icon-box"><span class="flaticon-international-delivery"></span></div>
                                <h4>Address :</h4><a href="https://goo.gl/maps/sRtXcVE4sbkA71A86" target="black"
                                    class="text">29/4, RS Plaza Palakad Main Road, <br>Kuniyamuthur, Coimbatore - 641008,<br> Tamil
                                    Nadu</a>
                                     <h4>Address :</h4><a href="https://goo.gl/maps/sRtXcVE4sbkA71A86" target="black"
                                    class="text">95/1B, Sathy Rd, <br>Saravanampatti,
                                    Coimbatore - 641035,<br> Tamil
                                    Nadu</a>
                            </li>
                            <!--<li>-->
                                <!--<div class="icon-box"><span class="flaticon-international-delivery"></span></div>-->
                            <!--    <h4>Address :</h4><a href="https://goo.gl/maps/sRtXcVE4sbkA71A86" target="black"-->
                            <!--        class="text">95/1B, Sathy Rd, <br>Saravanampatti,-->
                            <!--        Coimbatore - 641035,<br> Tamil-->
                            <!--        Nadu</a>-->
                            <!--</li>-->
                            <li>
                                <div class="icon-box"><span class="flaticon-envelope"></span></div>
                                <h4>Mail To :</h4><a href="mailto:ganesanenterprisecbe@gmail.com" class="text">ganesanenterprisecbe@gmail.com</a>
                            </li>
                            <li>
                                <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                                <h4>Call To :</h4><a href="tel:9003607919" class="text">(+91)9003607919</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Map Section-->
    <section class="map-section">
        <div class="map-outer">

            <!--Map Canvas-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.90419478985!2d76.95421061428841!3d10.970603758580557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859b401580b51%3A0x1574ab1d51aefcea!2sDuroflex%20Mattress%20Store%20-%20Ganesan%20Enterprises!5e0!3m2!1sen!2sin!4v1663076369318!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d7831.06531133717!2d77.0014273!3d11.0736228!3m2!1i1024!2i768!4f13.1!2m1!1s95%2F1B%2C%20Sathy%20Rd%2C%20Saravanampatti%2C%20Coimbatore!5e0!3m2!1sen!2sin!4v1664515232522!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
            </div>
        </div>
    </section>

@endsection
