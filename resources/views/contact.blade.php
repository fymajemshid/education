@extends('layouts.includes.app')
@section('content') 
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/index">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact block -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Get In Touch</p>
                <h3 class="title-style">Contact Us</h3>
            </div>

            <div class="row contact-block">
                <div class="col-md-7 contact-right">
                    {{-- <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form"> --}}
                        <div class="input-grids">
                            <div class="row">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                            <form action="{{ route('contact.store') }}" method="post" class="main-input">
                                @csrf
    
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="w3lName" placeholder="Your Name"
                                        class="contact-input" required="" />
                                        <span  class="text-danger">@error('name') {{$message}} @enderror </span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="w3lSender" placeholder="Your Email"
                                        class="contact-input" required="" />
                                        <span  class="text-danger">@error('email') {{$message}} @enderror </span>
                                </div>
                            </div>
                            <input type="text" name="subject" id="subject" placeholder="Subject"
                                class="contact-input" >
                                <span  class="text-danger">@error('subject') {{$message}} @enderror </span>

                            
                        <div class="form-input">
                            <textarea name="message" id="message" placeholder="Type your message here"
                                ></textarea>
                                <span  class="text-danger">@error('message') {{$message}} @enderror </span>
                        </div>
                        <input type="text" name="phone" id="w3phone" placeholder="phone"
                                class="contact-input" >
                                <span  class="text-danger">@error('phone') {{$message}} @enderror </span>
                        </div>
                        <div class="text-start">
                            <button class="btn btn-style btn-style-3">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                    <div class="contact-left">
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>Edu School, 10001, 5th Avenue, 12202 street, London.</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">+1(21) 112 7368</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact block -->

   @endsection