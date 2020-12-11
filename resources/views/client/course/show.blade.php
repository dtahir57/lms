@extends('layouts.client')

@section('title', 'Courses')

@section('content')
@if ($course->lessons->count() > 0)
<main class="modules-content border-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">
                    <iframe src="{{ $course->lessons[0]->video_url }}" width="968" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12">
                <hr class="invisible">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="module-blue pb-2 main-module-number">{{ $course->course_title }}</h6>
                            <h3 class="main-module-title">{{ $course->lessons[0]->lesson_title }}</h3>
                        </div>
                        <div class="hide-on-mobile">
                            <i class="fa fa-ellipsis-v float-right align-middle"></i>
                        </div>
                    </div>
                    <p class="main-module-desc">{!! $course->lessons[0]->lesson_content !!}</p>
                </a>
            </div>
        </div>
        <!---Video Block End--->
        <hr class="invisible">
        <div class="related-modules">
            @foreach($course->lessons as $lesson)
            @if ($lesson->id != $course->lessons[0]->id)
            <div class="row mb-5 sub-module-wrapper">
                <div class="col-md-3 col-4">
                    <iframe src="{{ $lesson->video_url }}" width="250" height="240" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
                <div class="col-md-9 col-8 d-flex align-items-center">
                    <div class="module-right-side-data-container">
                        <h3>
                            @if ($course->users->contains(Auth::user()->id))
                            <a href="{{ route('course.lesson_view', [$course->id, $lesson->id]) }}">
                            @else
                            <a href="#" onclick="not_enrolled()">
                            @endif
                            {{ $lesson->lesson_title }}
                            </a>
                        </h3>
                        {{-- <p>Duis vestibulum elit vel neque pharetra vulputate. Quisque scelerisque nisi urna.
                        Drum non risus in imperdiet. Proin </p> --}}
                        <div class="row hide-on-mobile">
                            <div class="col-6">
                                <p>Duration: <span class="module-blue semibold pl-2">45.60 Mins</span></p>
                            </div>
                            <div class="col-6">
                                <p>Comments: <span class="module-blue semibold pl-2">45.60 Mins</span></p>
                            </div>
                        </div>
                        <div class="row hide-on-large d-none">
                            <div class="col-6">
                                <span class="module-blue small"><i class="fa fa-clock text-muted pr-1"></i> 45.50 Mins.</span>
                            </div>
                            <div class="col-6">
                                <span class="module-blue small"><i class="fa fa-comment text-muted pr-1"></i> 855 </span>
                            </div>
                        </div>
                        <div class="row d-none show-on-tab">
                            <div class="col-3">
                                <span class="module-blue small"><i class="fa fa-clock text-muted pr-1"></i> 45.50 Mins.</span>
                            </div>
                            <div class="col-3">
                                <span class="module-blue small"><i class="fa fa-eye text-muted pr-1"></i> 7.2K</span>
                            </div>
                            <div class="col-3">
                                <span class="module-blue small"><i class="fa fa-thumbs-up text-muted pr-1"></i> 4.1K</span>
                            </div>
                            <div class="col-3">
                                <span class="module-blue small"><i class="fa fa-comment text-muted pr-1"></i> 855 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <hr class="invisible">
    <hr>
    <hr class="invisible">
    <div class="container ">
        <div class="d-flex justify-content-between">
            <div class="">
                <h4 class="hide-on-mobile">Discussions and Comments</h4>
                <h5 class="hide-on-large d-none">Comments</h5>
            </div>
            <div>
                <span>
                    <a href="" class="font-weight-bold">Last</a>
                    <span class="px-2">|</span>
                    <a href="" class="text-dark">Popular</a>
                </span>
            </div>
        </div>
        <hr class="invisible">
        <div class="comment-write-block">
            <textarea name="" id="" rows="7" class="form-control"
            placeholder="Write your comment here!"></textarea>
            <button class="btn btn-primary mt-4">Comment</button>
        </div>
    </div>
    <hr class="invisible large-space">
    <div class="container comments-container hide-on-mobile">
        <div class="row border-bottom pb-4 mb-4">
            <div class="col-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="72">
            </div>
            <div class="col-10 pl-0">
                <div class="d-flex justify-content-between">
                    <h5>Johnny Stewart</h5>
                    <span class="text-muted">20 / 01 / 2019</span>
                </div>
                <div class="comment-text-single">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                </div>
                <div class="comment-respont-links">
                    <a href="#" class="module-blue pr-5">Like</a>
                    <a href="#" class="module-blue pr-5">Reply</a>
                </div>
            </div>
        </div>
        <div class="row border-bottom pb-4 mb-4">
            <div class="col-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="72">
            </div>
            <div class="col-10 pl-0">
                <div class="d-flex justify-content-between">
                    <h5>Johnny Stewart</h5>
                    <span class="text-muted">20 / 01 / 2019</span>
                </div>
                <div class="comment-text-single">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                </div>
                <div class="comment-respont-links">
                    <a href="#" class="module-blue pr-5">Like</a>
                    <a href="#" class="module-blue pr-5">Reply</a>
                </div>
            </div>
        </div>
        <div class="row border-bottom pb-4 mb-4">
            <div class="col-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="72">
            </div>
            <div class="col-10 pl-0">
                <div class="d-flex justify-content-between">
                    <h5>Johnny Stewart</h5>
                    <span class="text-muted">20 / 01 / 2019</span>
                </div>
                <div class="comment-text-single">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                </div>
                <div class="comment-respont-links">
                    <a href="#" class="module-blue pr-5">Like</a>
                    <a href="#" class="module-blue pr-5">Reply</a>
                </div>
                <div class="replied-comments">
                    <div class="row border-bottom py-4 my-4">
                        <div class="col-2 pr-0">
                            <img src="assets/img/navbar/profile.png" alt="" class="img-fluid" width="72">
                        </div>
                        <div class="col-10 pl-0">
                            <div class="d-flex justify-content-between">
                                <h5>Johnny Stewart</h5>
                                <span class="text-muted">20 / 01 / 2019</span>
                            </div>
                            <div class="comment-text-single">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                            </div>
                            <div class="comment-respont-links">
                                <a href="#" class="module-blue pr-5">Like</a>
                                <a href="#" class="module-blue pr-5">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom py-4 my-4">
                        <div class="col-2 pr-0">
                            <img src="assets/img/navbar/profile.png" alt="" class="img-fluid" width="72">
                        </div>
                        <div class="col-10 pl-0">
                            <div class="d-flex justify-content-between">
                                <h5>Johnny Stewart</h5>
                                <span class="text-muted">20 / 01 / 2019</span>
                            </div>
                            <div class="comment-text-single">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                            </div>
                            <div class="comment-respont-links">
                                <a href="#" class="module-blue pr-5">Like</a>
                                <a href="#" class="module-blue pr-5">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom py-4 my-4">
                        <div class="col-2 pr-0">
                            <img src="assets/img/navbar/profile.png" alt="" class="img-fluid" width="72">
                        </div>
                        <div class="col-10 pl-0">
                            <div class="d-flex justify-content-between">
                                <h5>Johnny Stewart</h5>
                                <span class="text-muted">20 / 01 / 2019</span>
                            </div>
                            <div class="comment-text-single">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                            </div>
                            <div class="comment-respont-links">
                                <a href="#" class="module-blue pr-5">Like</a>
                                <a href="#" class="module-blue pr-5">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-bottom pb-4 mb-4">
            <div class="col-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="72">
            </div>
            <div class="col-10 pl-0">
                <div class="d-flex justify-content-between">
                    <h5>Johnny Stewart</h5>
                    <span class="text-muted">20 / 01 / 2019</span>
                </div>
                <div class="comment-text-single">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At.</p>
                </div>
                <div class="comment-respont-links">
                    <a href="#" class="module-blue pr-5">Like</a>
                    <a href="#" class="module-blue pr-5">Reply</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none show-on-mobile">
        <div class="row mobile-comment-single">
            <div class="col-3 col-sm-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="50px" class="align-middle">
            </div>
            <div class="col-9 col-sm-10 pl-0 d-flex align-items-center">
                <div class="w-100">
                    <h5 class="mb-1 mobile-comment-author">Robert Flems</h5>
                    <div class="d-flex justify-content-between small">
                        <div>
                            <span class="text-muted">20 / 01 / 2019</span>
                        </div>
                        <div class="">
                            <span class="module-blue pr-3">Reply</span>
                            <span class="text-muted"><i class="far fa-heart module-blue"></i> 50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna</p>
            </div>
        </div>
        <div class="row mobile-comment-single">
            <div class="col-3 col-sm-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="50px" class="align-middle">
            </div>
            <div class="col-9 col-sm-10 pl-0 d-flex align-items-center">
                <div class="w-100">
                    <h5 class="mb-1 mobile-comment-author">Robert Flems</h5>
                    <div class="d-flex justify-content-between small">
                        <div>
                            <span class="text-muted">20 / 01 / 2019</span>
                        </div>
                        <div class="">
                            <span class="module-blue pr-3">Reply</span>
                            <span class="text-muted"><i class="far fa-heart module-blue"></i> 50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna</p>
            </div>
        </div>
        <div class="row mobile-comment-single">
            <div class="col-3 col-sm-2 pr-0">
                <img src="assets/img/navbar/profile.png" alt="" width="50px" class="align-middle">
            </div>
            <div class="col-9 col-sm-10 pl-0 d-flex align-items-center">
                <div class="w-100">
                    <h5 class="mb-1 mobile-comment-author">Robert Flems</h5>
                    <div class="d-flex justify-content-between small">
                        <div>
                            <span class="text-muted">20 / 01 / 2019</span>
                        </div>
                        <div class="">
                            <span class="module-blue pr-3">Reply</span>
                            <span class="text-muted"><i class="far fa-heart module-blue"></i> 50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna</p>
            </div>
        </div>
    </div>
    <hr class="invisible">
    <div class="container last-section-nav">
        <div class="d-flex justify-content-between hide-on-mobile show-on-tab">
            <a href="#"><i class="fa fa-long-arrow-alt-left px-3"></i> Back to Modules Page</a>
            <a href="#">Next <i class="fa fa-long-arrow-alt-right px-3"></i> </a>
        </div>
        <div class="d-flex justify-content-between hide-on-large d-none hide-on-tab">
            <a href="#"><i class="fa fa-long-arrow-alt-left px-3"></i> Back</a>
            <a href="#">Next <i class="fa fa-long-arrow-alt-right px-3"></i> </a>
        </div>
    </div>
</main>
@else
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <h4 class="text-center text-primary">No Lessons Found!</h4>
        </div>
    </div>
</div>
@endif
<hr class="invisible large-space">
@endsection

@section('scripts')
<script>
    function not_enrolled()
    {
        alert('Please Enroll In This Course First!');
    }
</script>
@endsection