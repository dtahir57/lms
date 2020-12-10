@extends('layouts.client')

@section('title', 'Checkout')

@section('content')
<main>
    <section id="checkout">
        <div class="checkout-banner">
            <div class="checkout-text">
                <h1>Checkout</h1>
                <p>We've grouped together your frequently asked questions to provide you with the most comprehensive answers</p>
            </div>
        </div>
        <div class="checkout-details">
            <div class="pricing-wrapper">
                <div class="package-wrapper">
                    <div class="package-headers"><h2>Package Name</h2></div>
                    <div class="package-headers"><h2>1x</h2></div>
                    <div class="package-headers"><h2>2x</h2></div>
                    <div class="package-headers"><h2>3x</h2></div>
                    <div class="package-headers"><h2>4x</h2></div>
                </div>
                <div class="package-wrapper">
                    <div class="package-values active-price"><h2>Basic <span><img src="{{ asset('client/assets/img/checkout/arrow-current.png')}}" width="20"></span></h2></div>
                    <div class="package-values"><h2>997,00 &#8364;</h2></div>
                    <div class="package-values active-price"><h2>2x497,00 &#8364;</h2></div>
                    <div class="package-values"><h2>3x333,00 &#8364;</h2></div>
                    <div class="package-values"><h2>4x247,00 &#8364;</h2></div>
                </div>
                <div class="package-wrapper">
                    <div class="package-values"><h2>Popular <span><img src="{{ asset('client/assets/img/checkout/arrow-current.png')}}" width="20"></span></h2></div>
                    <div class="package-values"><h2>1497,00 &#8364;</h2></div>
                    <div class="package-values"><h2>2x747,00 &#8364;</h2></div>
                    <div class="package-values"><h2>3x499,00 &#8364;</h2></div>
                    <div class="package-values"><h2>4x373,00 &#8364;</h2></div>
                </div>
                <div class="package-wrapper">
                    <div class="package-values"><h2>Premium <span><img src="{{ asset('client/assets/img/checkout/arrow-current.png')}}" width="20"></span></h2></div>
                    <div class="package-values"><h2>2997,00 &#8364;</h2></div>
                    <div class="package-values"><h2>2x1447,00 &#8364;</h2></div>
                    <div class="package-values"><h2>3x999,00 &#8364;</h2></div>
                    <div class="package-values"><h2>4x747,00 &#8364;</h2></div>
                </div>
            </div>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <form action="{{ route('user.checkout') }}" method="POST">
                @csrf
                <div class="form-details">
                    <div class="pricing-mobile">
                        <h2 class="text-center">Select Package & quantity</h2>
                        <select id="pricing-select">
                            <option value="basic">Basic</option>
                            <option value="popular">Popular</option>
                            <option value="premium">Premium</option>
                        </select>
                        <div class="pricing-values-mobile basic">
                            <div class="price-mobile active-price-mobile">
                                <p>1x</p>
                                <p>997,00 &#8364</p>
                            </div>
                            <div class="price-mobile">
                                <p>2x</p>
                                <p>2x497,00 &#8364</p>
                            </div>  
                            <div class="price-mobile">
                                <p>3x</p>
                                <p>3x333,00 &#8364</p>
                            </div>
                            <div class="price-mobile">
                                <p>4x</p>
                                <p>4x247,00 &#8364</p>
                            </div>
                        </div>
                        <div class="pricing-values-mobile popular">
                            <div class="price-mobile">
                                <p>1x</p>
                                <p>1497,00 &#8364</p>
                            </div>
                            <div class="price-mobile">
                                <p>2x</p>
                                <p>2x747,00 &#8364</p>
                            </div>  
                            <div class="price-mobile">
                                <p>3x</p>
                                <p>3x499,00 &#8364</p>
                            </div>
                            <div class="price-mobile">
                                <p>4x</p>
                                <p>4x373,00 &#8364</p>
                            </div>
                        </div>
                        <div class="pricing-values-mobile premium">
                            <div class="price-mobile">
                                <p>1x</p>
                                <p>2997,00 &#8364</p>
                            </div>
                            <div class="price-mobile">
                                <p>2x</p>
                                <p>2x1447,00 &#8364</p>
                            </div>  
                            <div class="price-mobile">
                                <p>3x</p>
                                <p>3x999,00 &#8364</p>
                            </div>
                            <div class="price-mobile">
                                <p>4x</p>
                                <p>4x747,00 &#8364</p>
                            </div>
                        </div>
                    </div>
                    <h2>Checkout Information</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="fname" required value="{{ old('fname') }}" placeholder="First Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="lname" required value="{{ old('lname') }}" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="email" name="email" required value="{{ old('email') }}" placeholder="Email">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="phone_number" required value="{{ old('phone_number') }}" placeholder="Phone Number">
                        </div>
                    </div>
                    <h2>Address Information</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="home_address" required value="{{ old('home_address') }}" placeholder="Home Address">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="street_address" required value="{{ old('street_address') }}" placeholder="Street Address">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="office_address" required value="{{ old('office_address') }}" placeholder="Office Address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <select name="country">
                                <option class="selectpickeroptions" value="PK">Pakistan</option>
                                <option class="selectpickeroptions" value="US">United States</option>
                                <option class="selectpickeroptions" value="CA">Canada</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select name="city">
                                <option value="LHR">Lahore</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <select name="state">
                                <option value="PUN">Punjab</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="zipcode" required value="{{ old('zip_code') }}" placeholder="Zip Code">
                        </div>
                    </div>
                    <h2>Billing Information</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="" placeholder="Card Holder Name">
                        </div>
                        <div class="col-lg-6">
                            <select>
                                <option value="-1">Card Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="" placeholder="Card Number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="" placeholder="Ex. Date MM/YYYY">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="" placeholder="CVC">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="proceed">Proceed to checkout</button>
                        </div>
                    </div>
                    <div class="features-options">
                        <div class="image-wrapper">
                            <img src="{{ asset('client/assets/img/checkout/assistance.svg')}}">
                        </div>
                        <h2>7/7 Assistance</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                        <a href="">Do you have doubts ?  Here's what to dispel them:</a>
                    </div>
                    <div class="features-options">
                        <div class="image-wrapper">
                            <img src="{{ asset('client/assets/img/checkout/money.svg')}}">
                        </div>
                        <h2>Money Back Guarantee</h2>
                        <p>Your results are 100% guaranteed FOR 12 MONTHS. That is, if within the maximum 12 months, and after carefully following the guided step-by-step method, you have no results, you can request a full refund of your payment!</p>
                    </div>
                    <div class="features-options">
                        <div class="image-wrapper">
                            <img src="{{ asset('client/assets/img/checkout/secure.svg')}}">
                        </div>
                        <h2>Secure Payment</h2>
                        <p>If you wish to pay by bank transfer or via PayPal instantly online, please send me an email at the following address easylocimmo@gmail.com</p>
                        <a href="">easylocimmo@gmail.com</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection