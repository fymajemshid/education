@extends('layouts.includes.app')
@section('content') 
	
	<!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock py-5 mb-lg-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="{{asset('app-assets/assets/images/img1.jp')}}g" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p>Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit. </p>
                        <a href="tel:http://1(800)7654321"><i class="fas fa-phone-alt"></i> 1-800-654-3210</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">We Are The Best Choice For Your Child</h3>
                    <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Special Education</li>
                        <li><i class="fas fa-check-circle"></i>Access more then 100K online courses</li>
                        <li><i class="fas fa-check-circle"></i>Traditional Academies</li>
                    </ul>
                    <a href="contact.html" class="btn btn-style mt-5">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

    <!-- stats block -->
    <section class="w3-stats pt-4 pb-5" id="stats">
        <div class="container pb-md-5 pb-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Statistics</p>
                <h3 class="title-style">We are Proud to Share with You</h3>
            </div>
            <div class="row text-center pt-4">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <img src="{{asset('app-assets/assets/images/icon-1.pn')}}g" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-sm-1" data-to="36076" data-speed="1500"></div>
                        <p class="count-text">Students Enrolled</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <img src="{{asset('app-assets/assets/images/icon-2.png')}}" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="786" data-speed="1500"></div>
                        <p class="count-text">Our Branches</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <img src="{{asset('app-assets/assets/images/icon-3.png')}}" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="3630" data-speed="1500"></div>
                        <p class="count-text">Total Courses</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <img src="{{asset('app-assets/assets/images/icon-4.png')}}" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="6300" data-speed="1500"></div>
                        <p class="count-text">Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats block -->

    <!-- testimonials block -->
    <section class="w3l-index4 py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="content-slider text-center">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <img src="{{asset('app-assets/assets/images/testi1.jpg')}}" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Mario Spe</div>
                            </li>

                            <li class="anim2">
                                <img src="{{asset('app-assets/assets/images/testi2.jpg')}}" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                        illo
                                        inventore.
                                    </q> </blockquote>
                                <div class="source">- Petey Cru</div>
                            </li>
                            <li class="anim3">
                                <img src="{{asset('app-assets/assets/images/testi3.jpg')}}" class="img-fluid rounded-circle "
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Anna Sth</div>
                            </li>
                            <li class="anim4">
                                <img src="{{asset('app-assets/assets/images/testi1.jpg')}}" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Gail For</div>
                            </li>
                            <li class="anim5">
                                <img src="{{asset('app-assets/assets/images/testi2.jpg')}}" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Boye Fra</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials block -->

    <!-- team block -->
    <section class="w3l-team-13 py-5" id="team">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Team</p>
                <h3 class="title-style">Meet our Teachers</h3>
            </div>
            <div class="row text-center left-side">
                <div class="col-lg-3 col-6">
                    <div class="image-one">
                        <a href="#team">
                            <img src="{{asset('app-assets/assets/images/team1.png')}}" class="arrow-png img-responsive" />
                            <h4>Emma Watson</h4>
                            <div class="buttons-teams2 mt-2">
                                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="image-one">
                        <a href="#team">
                            <img src="{{asset('app-assets/assets/images/team2.png')}}" class="arrow-png img-responsive">
                            <h4>Enrique Lal</h4>
                            <div class="buttons-teams2 mt-2">
                                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="image-one">
                        <a href="#team">
                            <img src="{{asset('app-assets/assets/images/team3.png')}}" class="arrow-png img-responsive">
                            <h4>Smith Ker</h4>
                            <div class="buttons-teams2 mt-2">
                                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="image-one">
                        <a href="#team">
                            <img src="{{asset('app-assets/assets/images/team4.png')}}" class="arrow-png img-responsive">
                            <h4>Forkler Lee</h4>
                            <div class="buttons-teams2 mt-2">
                                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team block -->

    <!-- about-2 section -->
    <section class="w3l-about-2 pb-5 pt-4">
        <div class="container pb-md-5 pb-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-4 text-center pe-lg-4">
                    <img src="{{asset('app-assets/assets/images/image.jpg')}}" alt="" class="img-fluid radius-image m-auto" />
                </div>
                <div class="col-lg-6 about-2-secs-left ps-lg-5">
                    <p class="text-uppercase">Our Environment</p>
                    <h3 class="title-style mb-sm-3 mb-2">Active Learning, Expert Teachers & Safe Environment</h3>
                    <p>Consectetur adipiscing elit. Aliquam sit amet
                        efficitur tortor.Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                        sapien. In et augue ornare, tempor massa.</p>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-style btn-style-3" href="contact.html">Contact Us</a>
                        <a class="btn btn-style-primary ms-4" href="contact.html">Learn More <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->

    <!-- call block -->
    <section class="w3l-call-to-action-6">
        <div class="container py-md-5 py-sm-4 py-5">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="left-content-call">
                    <h3 class="title-big">Call To Enroll Your Child</h3>
                    <p class="text-white mt-1">Begin the change today!</p>
                </div>
                <div class="right-content-call mt-lg-0 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec me-lg-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+1(23) 456 789 0000</a>
                        </li>
                        <li><a href="contact.html" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Join for free</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call block -->

    @endsection