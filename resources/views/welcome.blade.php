@extends('layouts.client')

@section('title', 'Easyloc')

@section('content')
<main>
    <section id="homepage-banner">
        <div class="container">
            <div class="row change-order">
                <div class="col-lg-5 col-sm-push-12">
                    <h1 class="semibold">Download My <span class="primary-clr">Free</span><br> E-Book</h1>
                    <p class="primary-clr medium">THE 4 MAJOR STEPS TO SUB-LEASE PRO</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="email" name="" placeholder="Email">
                            </div>
                        </div>
                        <div>
                            <button>DOWNLOAD NOW</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7 col-sm-pull-12">
                    <div>
                        <img src="{{ asset('client/assets/img/home/cover.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="whoami">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-between headers">
                <h2 class="semibold mb-4">Who <span class="primary-clr">Am</span> I</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/easyloc.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>Founder of the EasyLoc Immo Ethique method</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
                <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/leaves.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>Ethical Investor</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
                <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/support.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>I support future Muslim sub-rental companies</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
            </div>
        </div>
    </section>
    <section id="discover-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div>
                        <img src="{{ asset('client/assets/img/home/person.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7 text-area">
                    <p>My name is Khalid RAMDANI,</p>
                    <p>originally from the Paris region and father of 3 children. 2 years ago, I embarked on Ethical investment through professional sub-leasing. </p>
                    <p>This experience allowed me to create a simple and effective method to allow
                    everyone to become a real estate annuitant. </p>
                    <p>This method has already proven its worth, in my life, by replacing my salary as
                    Project Manager, and also with several investors Today, I want to benefit as many people as possible, concerned about their future and having the will to take their life in hand without being limited to the diktats / brakes of society. </p>
                    <p>Through the EasyLoc Immo Ethique method, I offer turnkey support to become a
                        Muslim Sub-Renter by generating income in real estate without going through
                    banks (without Riba).</p>
                    <div>
                        <button>DISCOVER THE TRAINING</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="whoami">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-between headers">
                <h2 class="semibold mb-4">Several Advantages Of Professional Sub-Lease</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/real-estate.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>You become a real estate annuitant without credit</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
                <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/limits.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>No limit on the number of goods the only limit is you!</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
                <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/money.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>Generate more than 700 € per month and per property.</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sublease-area">
        <div class="container">
            <h2>Professional & <span class="primary-clr">legal</span> Sub - Lease</h2>
            <p class="m-0">It is by far the best compromise between my principles / convictions & real estate investment</p>
            <div class="row d-flex flex-lg-row flex-column-reverse">
                <div class="col-sm-12 col-lg-7 area-1">
                    <div class="area-1-innner">
                        <h3 class="primary-clr">The concept is simple:</h3>
                        <p>1- Use the property of owners for short-term rental</p>
                        <p>2- Pay rent to the owner as for a classic rental</p>
                        <p>3- Exploit the asset intelpgently to generate Cash-flow</p>
                        <p>4- Automate your activity to create passive income</p>
                        <p>
                            This activity is regulated, so there are rules to follow, a process to follow to operate the activity legally (Document, process, contract, etc.) and this is what I teach in this training.
                        </p>
                        <div>
                            <button class="btn-signup">DISCOVER THE TRAINING</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 flex-first flex-sm-unordered col-lg-5 area-2">
                    <img src="{{ asset('client/assets/img/home/person2.png')}}">
                </div>
            </div>
        </div>
    </section>
    <section id="whoami">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-between headers">
                <h2 class="semibold mb-4">The Support</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/modules.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>6 training modules, with personalized follow-up</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
                <div class="col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/property.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>Support until the signing of your first property</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
                <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center justify-content-center details">
                    <div class="cirlce-img mb-4">
                        <img src="{{ asset('client/assets/img/home/support.png')}}" class="img-fluid">
                    </div>
                    <div class="headers">
                        <h3>Life Time Support</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection