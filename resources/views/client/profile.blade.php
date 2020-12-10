@extends('layouts.client')

@section('title', 'Profile')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12" id="left-sidebar">
                <div class="position-relative">
                    <img src="assets/img/profile/profile-pic.png" alt="" width="175">
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
                <div>
                    <h4>Edit My Information</h4>
                    <hr class="invisible">
                    <div>
                        <input type="email" class="form-control input-12" placeholder="Email">
                        <input type="password" class="form-control input-12" placeholder="***************">
                        <button class="btn btn-primary update-info-btn">Update Info</button>
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