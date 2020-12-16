@extends('layouts.client')

@section('title', 'Profile')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12" id="left-sidebar">
                <div class="position-relative">
                    <img src="{{ asset('client/assets/img/profile/profile-pic.png') }}" alt="" width="175">
                    <div class="upload-button">
                        <a href=""><i class="p-3 fa fa-camera text-white"></i></a>
                    </div>
                </div>
                <hr class="invisible">
                <div>
                    <h4 class="semibold mb-3">Eugine Riley</h4>
                    <p>Once your registeration is complete, you will receive an access which</p>
                </div>
                <hr class="invisible">
                <div>
                    <div class="progress" data-value='50'>
                        <span class="progress-left">
                            <span class="progress-bar progress-percent"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-percent"></span>
                        </span>
                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 progress-percent">89%</div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="progress-percent">Watching Rate</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12" id="right-sidebar">
                @if (session('password_updated'))
                    <li class="alert alert-success">{{ session('password_updated') }}</li>
                @endif
                @if (session('wrong_pass'))
                    <li class="alert alert-danger">{{ session('wrong_pass') }}</li>
                @endif
                @if (session('profile_updated'))
                    <li class="alert alert-success">{{ session('profile_updated') }}</li>
                @endif
                <div>
                    <h4>Edit My Information</h4>
                    <hr class="invisible">
                    <div>
                        <form action="{{ route('user.update_profile') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fname" required value="{{ Auth::user()->fname }}" class="form-control input-12" placeholder="First Name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" required value="{{ Auth::user()->lname }}" class="form-control input-12" placeholder="Last Name" />
                                </div>
                            </div>
                            <input type="email" name="email" required value="{{ Auth::user()->email }}" class="form-control input-12" placeholder="Email">
                            {{-- <input type="password" class="form-control input-12" placeholder="***************"> --}}
                            <input type="text" name="phone_number" required value="{{ Auth::user()->phone_number }}" class="form-control input-12" placeholder="Phone Number">
                            <button type="submit" class="btn btn-primary update-info-btn">Update Info</button>
                        </form>
                    </div>
                </div>
                <div>
                    <h4>Update Password</h4>
                    <hr class="invisible">
                    <div>
                        <form action="{{ route('user.update_password') }}" method="POST">
                            @csrf
                            <input type="password" name="old_password" class="form-control input-12" required placeholder="Old Password">
                            <input type="password" name="new_password" class="form-control input-12" required placeholder="New Password">
                            <input type="password" name="password_confirmation" class="form-control input-12" required placeholder="Confirm Password">
                            <button type="submit" class="btn btn-primary update-info-btn">Update Password</button>
                        </form>
                    </div>
                </div>
                <hr class="invisible clearboth">
                <div>
                    <h4>Billing Info</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam por invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <hr class="invisible">
                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <div class="icon-bg d-flex justify-content-center align-items-center">
                            <img src="assets/img/profile/file-with-arrow.png" class="img-fluid icon-icon">
                        </div>
                        <div>
                            <div><a href="" class="primary">Bill_Invoice_of_Trening_2020_v01.pdf</a></div>
                            <div><span class="grey">File size : 5.00 MB</span></div>
                        </div>
                    </div>
                </div>
                <hr class="invisible clearboth">
                <hr class="invisible clearboth">
                <div>
                    <h4>Other Billing Invoice</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam por invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <hr class="invisible">
                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <div class="icon-bg d-flex justify-content-center align-items-center">
                            <img src="assets/img/profile/file-with-arrow.png" class="img-fluid icon-icon">
                        </div>
                        <div>
                            <div><a href="" class="primary">Bill_Invoice_of_Trening_2020_v02.pdf</a></div>
                            <div><span class="grey">File size : 5.00 MB</span></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <div class="icon-bg d-flex justify-content-center align-items-center">
                            <img src="assets/img/profile/file-with-arrow.png" class="img-fluid icon-icon">
                        </div>
                        <div>
                            <div><a href="" class="primary">Bill_Invoice_of_Trening_2020_v03.pdf</a></div>
                            <div><span class="grey">File size : 5.00 MB</span></div>
                        </div>
                    </div>
                </div>
                <hr class="invisible large-space">
            </div>
        </div>
    </div>
</main>
@endsection