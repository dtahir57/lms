@extends('layouts.client')

@section('title', 'FAQ')

@section('content')
<main>
    <section id="faq-area">
        <div class="faq-banner">
            <div class="faq-text">
                <h1>FAQ</h1>
                <p>We've grouped together your frequently asked questions to provide you with the most comprehensive answers</p>
            </div>
        </div>
        <div class="faq-details">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="accordion" role="tablist">
                            <div class="card two">
                                <div class="card-header active" role="tab" id="faq1">
                                    <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">How do I access the program?
                                    <i class="fas fa-chevron-down"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="faq1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Once your registration is complete, you will receive an access which is reserved only to members of this program. The videos are organized in different modules that cover, step by step, everything you need to know and put in place to invest in real estate successfully. <br>You can watch them whenever and wherever you want. All you need is an internet connection. The videos are accessible for life
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Am I too young to invest?<i class="fas fa-chevron-right"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="faq2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There is no age to invest. The earlier you start, the more head start you have and the more you can build up a lot of wealth and assets. <br>I will explain to you how to invest as a student and that without contribution. No problem, only solutions!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq3">
                                    <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Is there a follow-up during my training?<i class="fas fa-chevron-right"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="faq3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq4">
                                    <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">How much money will i make with this formation ?<i class="fas fa-chevron-right"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="faq4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq5">
                                    <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse5" aria-expanded="false" aria-controls="collapse5">Is this training right for me?<i class="fas fa-chevron-right"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="faq5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We created this training with a single objective: to share with our members the best winning strategies to invest in profitable real estate without going through the banking sector. <br><br>Want to be in control of your finances and not make money your number one problem? So welcome to the EasyLoc Immo program. <br><br>We have different profiles that join this training: from the student not wishing to follow the scheme promised by the company (major studies, wage-earning then retirement) to the employee wishing to leave his job. Each professional and financial situation has been thought through and you will always find solutions in this program.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq6">
                                    <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse6" aria-expanded="false" aria-controls="collapse6">How do I access the program?<i class="fas fa-chevron-right"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="faq6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq7">
                                    <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse7" aria-expanded="false" aria-controls="collapse7">How does the warranty work?<i class="fas fa-chevron-right"></i></a>
                                    </h5>
                                </div>
                                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="faq7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex align-items-center justify-content-center">
                    <button class="join-btn">JOIN THE TRAINING NOW</button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection