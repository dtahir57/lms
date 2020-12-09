@extends('layouts.client')

@section('title', 'Training')

@section('styles')
<link rel="stylesheet" href="{{ asset('client/vendor/slick/slick-theme.css') }}">
<link rel="stylesheet" href="{{ asset('client/vendor/slick/slick.css')}}">
@endsection

@section('content')
<main class="main-content training">
    <div class="t-hero">
        <h1 class="t-hero-h1">Presentation Of The <br> Accompainant & Its Benefits</h1>
        <p class="t-hero-p">
            Create real estate income WITHOUT credit, WITHOUT even owning real estate!
            How many Muslim investors have been stuck thinking that there is no other solution than credit to generate
            real
            estate income?
        </p>
        <p class="t-hero-p">
            This was my case before discovering the Professional and Legal Sub-Leasing With the EasyLoc Immo Ethique
            program
            you will discover a way to generate income from real estate without needing banks. Do not miss this strategy
            that can change your life !!!
        </p>
        <hr class="invisible">
        <div class="training-page-CTA-button">
            <button class="btn btn-primary float-none"> Join THE TRAINING Now</button>
        </div>
    </div>
    <div class="container">
        <div class="video-slider-section pt-4">
            <h3 class="text-center"> Khalid presenting EasyLoc</h3>
            <div class="video-slider-single mt-5 hide-on-desktop">
                <div class="d-flex justify-content-center">
                    <video controls class="w-100">
                        <source src="assets/uploads/video.mp4" type="video/mp4"/>
                    </video>
                </div>
                <div class="d-flex justify-content-center">
                    <video controls class="w-100">
                        <source src="assets/uploads/video.mp4" type="video/mp4"/>
                    </video>
                </div>
            </div>
            <div class="video-slider-desktop mt-5">
                <div class="d-flex justify-content-center">
                    <div class="position-relative">
                        <div class="t-top-video-wrapper">
                            <video class="t-top-video">
                                <source src="assets/uploads/video.mp4" type="video/mp4"/>
                            </video>
                            <div class="t-top-playpause">
                                <img src="assets/img/profile/video-play.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="position-relative">
                        <div class="t-top-video-wrapper">
                            <video class="t-top-video">
                                <source src="assets/uploads/video.mp4" type="video/mp4"/>
                            </video>
                            <div class="t-top-playpause">
                                <img src="assets/img/profile/video-play.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="invisible large-space">
        <div class="text-center modules-section-header">
            <h3>PRESENTATION OF MODULES</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunut labore
                et dolore magna
            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
        </div>
        <div class="modules-desktop">
            <div class="module-single">
                <div class="row">
                    <div class="col-6 align-middle">
                        <h4 class="ms-title">PRESENTATION OF THE CONCEPT</h4>
                        <div class="ms-list-wrapper">
                            <ul>
                                <li class="ms-link"><a href="#">Know everything about the Sub-Rental Pro</a></li>
                                <li class="ms-link"><a href="#">The ins and outs</a></li>
                                <li class="ms-link"><a href="#">Presentation of my results</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 ms-img-wrapper">
                        <img src="assets/img/training/presentation.svg" class="ms-img" alt="module image">
                    </div>
                </div>
            </div>
            <div class="module-single">
                <div class="row flex-row-reverse">
                    <div class="col-6 align-middle">
                        <h4 class="ms-title">THE LEGAL ASPECT</h4>
                        <div class="ms-list-wrapper">
                            <ul>
                                <li class="ms-link"><a href="#">How to operate this activity legally?</a></li>
                                <li class="ms-link"><a href="#">Understand the law that governs this activity</a></li>
                                <li class="ms-link"><a href="#">Advice for the creation of the company</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 ms-img-wrapper">
                        <img src="assets/img/training/legal-aspects.svg" class="ms-img" alt="module image">
                    </div>
                </div>
            </div>
            <div class="module-single">
                <div class="row">
                    <div class="col-6 align-middle">
                        <h4 class="ms-title">FINDING A GOOD THAT IS IN CARDBOARD</h4>
                        <div class="ms-list-wrapper">
                            <ul>
                                <li class="ms-link no-wrap"><a href="#">Validate the market study and profitability in
                                    your
                                geographic area</a></li>
                                <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                <li class="ms-link"><a href="#">How to search?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 ms-img-wrapper">
                        <img src="assets/img/training/case-study.svg" class="ms-img" alt="module image">
                    </div>
                </div>
            </div>
            <div class="module-single">
                <div class="row flex-row-reverse">
                    <div class="col-6 align-middle">
                        <h4 class="ms-title">Convincing the owner</h4>
                        <div class="ms-list-wrapper">
                            <ul>
                                <li class="ms-link"><a href="#">Strategies and arguments to convince <br> Objections /
                                    Counterobjections
                                    <li class="ms-link"><a href="#">Mail model</a></li>
                                    <li class="ms-link"><a href="#">Telephone spitch</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 ms-img-wrapper">
                            <img src="assets/img/training/hand-shake.svg" class="ms-img" alt="module image">
                        </div>
                    </div>
                </div>
                <div class="module-single">
                    <div class="row">
                        <div class="col-6 align-middle">
                            <h4 class="ms-title">SET UP YOUR SHORT TERM RENTAL</h4>
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link no-wrap"><a href="#">Validate the market study and profitability in
                                        your
                                    geographic area</a></li>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 ms-img-wrapper">
                            <img src="assets/img/training/rocket.svg" class="ms-img" alt="module image">
                        </div>
                    </div>
                </div>
                <div class="module-single">
                    <div class="row flex-row-reverse">
                        <div class="col-6 align-middle">
                            <h4 class="ms-title">AUTOMATE YOUR ACTIVITY</h4>
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">Strategies and arguments to convince <br> Objections /
                                    Counterobjections</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 ms-img-wrapper">
                            <img src="assets/img/training/settings.svg" class="ms-img" alt="module image">
                        </div>
                    </div>
                </div>
                <div class="module-single">
                    <div class="row">
                        <div class="col-6 align-middle">
                            <h4 class="ms-title">BONUS</h4>
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to increase your turnover otherwise with this
                                    activity?</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 ms-img-wrapper">
                            <img src="assets/img/training/bonus.svg" class="ms-img" alt="module image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modules-tab hide-on-desktop">
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/presentation-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c1" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>PRESENTATION OF THE CONCEPT</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c1">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">Know everything about the Sub-Rental Pro</a></li>
                                    <li class="ms-link"><a href="#">The ins and outs</a></li>
                                    <li class="ms-link"><a href="#">Presentation of my results</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/legal-aspects-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c2" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>The Legal Aspect</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c2">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">How to operate this activity legally?</a></li>
                                    <li class="ms-link"><a href="#">Understand the law that governs this activity</a></li>
                                    <li class="ms-link"><a href="#">Advice for the creation of the company</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/case-study-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c3" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>Finding the good that is in cardboard</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c3">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link no-wrap"><a href="#">Validate the market study and profitability in your geographic area</a></li>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/hand-shake-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c4" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>CONVINCING THE OWNER</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c4">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">Strategies and arguments to convince <br> Objections /
                                    Counterobjections
                                    <li class="ms-link"><a href="#">Mail model</a></li>
                                    <li class="ms-link"><a href="#">Telephone spitch</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/rocket-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c5" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>SET UP YOUR SHORT TERM RENTAL</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c5">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link no-wrap"><a href="#">Validate the market study and profitability in
                                        your
                                    geographic area</a></li>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/settings-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c6" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>AUTOMATE YOUR ACTIVITY</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c6">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">Strategies and arguments to convince <br> Objections /
                                    Counterobjections</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module-single-tab">
                    <div class="card">
                        <img src="assets/img/training/bonus-white.svg" alt="" class="img-module-mobile d-none">
                        <div class="card-header">
                            <hr class="d-none space-mobile">
                            <a class="card-title" data-toggle="collapse" href="#c7" aria-expanded="false">
                                <div class="d-flex justify-content-between">
                                    <span>BONUS</span>
                                    <span><i class="fa fa-chevron-down js-rotate-if-collapsed"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="card-body collapse" id="c7">
                            <div class="ms-list-wrapper">
                                <ul>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                    <li class="ms-link"><a href="#">The type of property targeted</a></li>
                                    <li class="ms-link"><a href="#">How to increase your turnover otherwise with this
                                    activity?</a></li>
                                    <li class="ms-link"><a href="#">How to search?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-page-CTA-button">
                <button class="btn btn-primary float-none">Join THE TRAINING Now</button>
            </div>
        </div>
        <div class="testimonial-section">
            <div class="container">
                <div class="text-center modules-section-header">
                    <h3>Testimonials</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunut
                        labore
                        et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
                </div>
                <hr class="invisible">
            </div>
            <div>
                <div class="testimonial-slider">
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr class="invisible large-space">
            </div>
            <div class="training-page-CTA-button">
                <button class="btn btn-primary float-none">Join THE programs</button>
            </div>
        </div>
        <div class="testimonials-for-mobile hide-on-desktop">
            <hr class="invisible">
            <div class="testimonial-slider-tab">
                <div class="d-flex justify-content-center">
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card testimonial-card">
                        <div class="card-header">
                            <h3 class="module-blue card-title">IT Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                    expedita id
                                    incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                    reprehenderit
                                    sapiente
                                    sed soluta ullam.
                                </p>
                            </div>
                            <div class="quote-close-wrapper">
                                <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-9">
                                    <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                    <div class="d-inline-block align-middle pl-3">
                                        <h6 class="testimonial-author-name">Marwan</h6>
                                        <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                    <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-page-CTA-button container pt-5">
                <button class="btn btn-primary float-none">Join THE programs</button>
            </div>
        </div>
        <div class="container">
            <div class="package-section-header">
                <h3>Choose your best package</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunut labore
                    et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
            </div>
            <hr class="invisible">
            <div class="pricing-table-large mt-5">
                <div class="row table-pricing-header">
                    <div class="col-6"></div>
                    <div class="col-2"><span>Basic</span><h6>997€</h6></div>
                    <div class="col-2"><span>Popular</span><h6>997€</h6></div>
                    <div class="col-2"><span>Premium</span><h6>997€</h6></div>
                </div>
                <div class="pricing-table-body-large">
                    <div class="row">
                        <div class="col-6"><a href="">6 training modules</a></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-6"><a href="">After-sales service 7 days a week</a></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-6"><a href="">Specific lease of Pro sublet</a></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-6"><a href="">Private Facebook Club</a></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-6"><a href="">Management tool</a></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-6"><a href="">Increase your turnover differently with this activity</a></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                        <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-6"><a href="">Creation of your marketing kit (Logo / Flyer / Custom website)</a>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2"><i class="fa fa-check text-success"></i></div>
                    <div class="col-2"><i class="fa fa-check text-success"></i></div>
                </div>
                <div class="row">
                    <div class="col-6"><a href="">Personalized coaching up to generating your first income €</a></div>
                    <div class="col-2"></div>
                    <div class="col-2"></div>
                    <div class="col-2"><i class="fa fa-check text-success"></i></div>
                </div>
            </div>
        </div>
        <div class="pricing-table-small hide-on-desktop">
            <div class="package-slider">
                <div class="d-flex justify-content-center">
                    <div class="card package-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span>Basic</span>
                                    <h6>1000€</h6>
                                </div>
                                <div>
                                    <img src="assets/img/training/rocket.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <a href="#" class="module-blue text-decoration-none">6 training modules</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">After-sales service 7 days a
                                week</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Specific lease of Pro sublet</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Private Facebook Club
                                </a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Management tool</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Increase your turnover differently
                                with this activity</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4 not-included-in-pkg">
                                <a href="#" class="module-blue text-decoration-none">Creation of your marketing kit
                                    (Logo / Flyer
                                Custom website)</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4 not-included-in-pkg">
                                <a href="#" class="module-blue text-decoration-none">Personalized coaching up to generating your first income €</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="training-page-CTA-button">
                                <button class="btn btn-primary float-none">Join THE programs</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card package-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span>Popular</span>
                                    <h6>1000€</h6>
                                </div>
                                <div>
                                    <img src="assets/img/training/rocket.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <a href="#" class="module-blue text-decoration-none">6 training modules</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">After-sales service 7 days a
                                week</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Specific lease of Pro sublet</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Private Facebook Club
                                </a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Management tool</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Increase your turnover differently
                                with this activity</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Creation of your marketing kit
                                    (Logo / Flyer
                                Custom website)</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4 not-included-in-pkg">
                                <a href="#" class="module-blue text-decoration-none">Personalized coaching up to
                                    generating
                                your first income €</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="training-page-CTA-button">
                                <button class="btn btn-primary float-none">Join THE programs</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card package-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span>Premium</span>
                                    <h6>1000€</h6>
                                </div>
                                <div>
                                    <img src="assets/img/training/rocket.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <a href="#" class="module-blue text-decoration-none">6 training modules</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">After-sales service 7 days a
                                week</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Specific lease of Pro sublet</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Private Facebook Club
                                </a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Management tool</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Increase your turnover differently
                                with this activity</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Creation of your marketing kit
                                    (Logo / Flyer
                                Custom website)</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#" class="module-blue text-decoration-none">Personalized coaching up to
                                    generating
                                your first income €</a>
                                <i class="fa fa-check text-white p-2 rounded-circle package-check-mark"></i>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="training-page-CTA-button">
                                <button class="btn btn-primary float-none">Join THE programs</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-page-cta">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-5 d-none cta-img">
                    <img src="assets/img/training/bottom-page-cta-girl.png" alt="" class="img-fluid">
                </div>
                <div class="col-12">
                    <div>
                        <p class="cta-text">
                            You want to know more about this activity, reserve your call by clicking on the <br>
                            button below, I would be happy to answer your questions.
                        </p>
                        <button class="btn btn-primary cta-button">Book a call</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-for-tab hide-on-desktop">
        <hr class="invisible">
        <div class="testimonial-slider-tab">
            <div class="d-flex justify-content-center">
                <div class="card testimonial-card">
                    <div class="card-header">
                        <h3 class="module-blue card-title">IT Works</h3>
                    </div>
                    <div class="card-body">
                        <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                        <div class="testimonial-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                expedita id
                                incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                reprehenderit
                                sapiente
                                sed soluta ullam.
                            </p>
                        </div>
                        <div class="quote-close-wrapper">
                            <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9">
                                <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                <div class="d-inline-block align-middle pl-3">
                                    <h6 class="testimonial-author-name">Marwan</h6>
                                    <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                </div>
                            </div>
                            <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="card testimonial-card">
                    <div class="card-header">
                        <h3 class="module-blue card-title">IT Works</h3>
                    </div>
                    <div class="card-body">
                        <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                        <div class="testimonial-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                expedita id
                                incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                reprehenderit
                                sapiente
                                sed soluta ullam.
                            </p>
                        </div>
                        <div class="quote-close-wrapper">
                            <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9">
                                <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                <div class="d-inline-block align-middle pl-3">
                                    <h6 class="testimonial-author-name">Marwan</h6>
                                    <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                </div>
                            </div>
                            <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="card testimonial-card">
                    <div class="card-header">
                        <h3 class="module-blue card-title">IT Works</h3>
                    </div>
                    <div class="card-body">
                        <div class="quote-open-wrapper"><img src="assets/img/training/quote-open.png" alt=""></div>
                        <div class="testimonial-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa earum eius esse excepturi
                                expedita id
                                incidunt ipsum, itaque nam, nemo omnis perspiciatis provident quidem ratione
                                reprehenderit
                                sapiente
                                sed soluta ullam.
                            </p>
                        </div>
                        <div class="quote-close-wrapper">
                            <img src="assets/img/training/quote-close.png" alt="" class="float-right">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9">
                                <img src="assets/img/navbar/profile.png" alt="" class="d-inline-block">
                                <div class="d-inline-block align-middle pl-3">
                                    <h6 class="testimonial-author-name">Marwan</h6>
                                    <span class="testimonial-author-desc">CEO at GOOGLE</span>
                                </div>
                            </div>
                            <div class="col-3 text-center d-flex justify-content-end align-items-center">
                                <a href=""> <img src="assets/img/training/long-right.png" alt="" class="testimonial-link-arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="training-page-CTA-button container pt-5">
            <button class="btn btn-primary float-none">Join THE programs</button>
        </div>
    </div>
    <hr class="invisible">
    <div class="mobile-slider-section">
        <div class="container">
            <div class="mobile-slider-wrapper text-center">
                <img src="assets/img/training/mobile.png" alt="" class="mobile-slide">
                <img src="assets/img/training/mobile.png" alt="" class="mobile-slide">
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('client/vendor/slick/slick.js')}}"></script>
        <script>
        $(document).ready(function(){
        let video = $(".t-top-video");
        video.parent().click(function () {
        console.log("clicked on video")
        if ($(this).children(video).get(0).paused) {
        $(this).children(".t-top-playpause").fadeOut();
        $(this).children(video).get(0).play();
        video.attr('controls', '');
        } else {
        $(this).children(video).get(0).pause();
        video.removeAttr('controls');
        $(this).children(".t-top-playpause").fadeIn();
        }
        });
        $(document).ready(function () {
        $('.video-slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false
        });
        $('.video-slider-desktop').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        });
        $('.testimonial-slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 2.3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "50px",
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        });
        $('.testimonial-slider-tab').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 3000,
        });
        $('.package-slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 3000,
        });
        $('.mobile-slider-wrapper').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        arrows: true,
        zIndex: 1000,
        responsive: [
        {
        breakpoint: 768,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        centerMode: false
        }
        }
        ]
        });
        });
        });
        </script>
@endsection