@extends('welcome')
@section('title','About Us')
@include('body.header')

<div class="bg-theme-overlay">
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white">about us</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="{{ route('home') }}" class="text-white">
                                home
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                about us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="home__about bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title__leading">
                    <h6 class="text-uppercase text-primary mb-3">trusted By thousands</h6>
                    <h2 class="text-capitalize">Delivering High Quality Projects property valuation </h2>
                    <p>
                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam.

                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    </p>
                    <a href="#" class="btn btn-primary mt-3 text-capitalize"> read more
                        <i class="fa fa-angle-right ml-3 "></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__image">
                    <div class="about__image-top">
                        <div class="about__image-top-hover">
                            <img src="images/gallery.jpg" alt="" class="img-fluid">
                        </div>

                    </div>
                    <div class="about__image-bottom">
                        <div class="about__image-bottom-hover">
                            <img src="images/gallery3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT -->



<section class="projects__partner ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">our other successful projects</h2>
                    <p class="text-center text-capitalize">brand partners successful projects trusted many clients
                        building real estate since 1985 we experiance </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="projects__partner-logo">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <img src="images/partner-logo6.png" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/partner-logo7.png" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/partner-logo8.png" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/partner-logo1.png" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/partner-logo5.png" alt="" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR TEAM -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        our Team
                    </h2>
                    <p class="text-center text-capitalize">see our top of the month teams</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="wrap-agent">
                    <div class="team-member">
                        <div class="team-img">
                            <img alt="team member" class="img-fluid w-100" src="images/team11.jpg">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h5>
                                    Hi There !
                                </h5>
                                <p>
                                    I am Senior Agent Property
                                </p>
                                <a class="btn btn-primary" href="#">
                                    Agent Profile
                                </a>
                            </div>
                            <ul class="list-inline s-link mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-google-plus">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-title">
                            <h6>
                                Martin Smith
                            </h6>
                            <span>
                                Agent Real Estate
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrap-agent">
                    <div class="team-member">
                        <div class="team-img">
                            <img alt="team member" class="img-fluid w-100" src="images/team12.jpg">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h5>
                                    Hi There !
                                </h5>
                                <p>
                                    I am Senior Agent Property
                                </p>
                                <a class="btn btn-primary" href="#">
                                    Agent Profile
                                </a>
                            </div>
                            <ul class="list-inline s-link mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-google-plus">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-title">
                            <h5>
                                Martin Smith
                            </h5>
                            <span>
                                Agent Real Estate
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrap-agent">
                    <div class="team-member">
                        <div class="team-img">
                            <img alt="team member" class="img-fluid w-100" src="images/team13.jpg">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h5>
                                    Hi There !
                                </h5>
                                <p>
                                    I am Senior Agent Property
                                </p>
                                <a class="btn btn-primary" href="#">
                                    Agent Profile
                                </a>
                            </div>
                            <ul class="list-inline s-link mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-google-plus">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-title">
                            <h5>
                                Martin Smith
                            </h5>
                            <span>
                                Agent Real Estate
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TEAM -->




<!-- CALL TO ACTION -->
<section class="cta-v1 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
                <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property
                    Services
                    For You
                </p>

            </div>
            <div class="col-lg-3">
                <a href="#" class="btn btn-light text-uppercase ">request a quote
                    <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
            </div>
        </div>
    </div>
</section>
<!-- END CALL TO ACTION -->

<!-- Footer  -->

