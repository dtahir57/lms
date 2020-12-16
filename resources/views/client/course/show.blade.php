@extends('layouts.client')

@section('title', 'Courses')

@section('styles')
<style>
    @media(max-width: 980px) {
        #iframe {
            width: 720px;
            height: 560px;
        }
    }
    @media(max-width: 768px) {
        #iframe {
            width: 560px;
            height: 480px;
        }
    }
    @media(max-width: 480px) {
        #main-iframe { 
            width: 15%;
            height: 200px;
        }
    }
</style>
@endsection

@section('content')
@if ($course->lessons->count() > 0)
<main class="modules-content border-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @php
                $enrolled = App\Models\UserEnrollInCourse::where('user_id', Auth::user()->id)->where('course_id', $course->id)->first();
                @endphp
                @if($enrolled)
                <button class="btn btn-secondary mt-3 mb-3" disabled>Enrolled</button>
                @else
                <a href="{{ route('course.enroll', $course->id) }}" role="button" class="btn btn-success">Enroll Now</a>
                @endif
                <div class="wrapper" id="main-iframe">
                    <iframe src="{{ $course->lessons[0]->video_url }}" width="968" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen id="iframe"></iframe>
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
    <div class="container">
        <div class="d-flex justify-content-between">
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
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
            <form action="{{ route('lesson.comment', $course->lessons[0]->id) }}" method="POST">
                @csrf
                <textarea name="comment" rows="7" class="form-control" placeholder="Write your comment here!" required>{{ old('comment') }}</textarea>
                <button type="submit" class="btn btn-primary mt-4">Comment</button>
            </form>
        </div>
    </div>
    <hr class="invisible large-space">
    <div class="container comments-container hide-on-mobile">
        @foreach($course->lessons[0]->comments as $comment)
        <div class="row border-bottom pb-4 mb-4">
            <div class="col-2 pr-0">
                <img src="{{ asset('client/assets/img/navbar/profile.png')}}" alt="" width="72">
            </div>
            <div class="col-10 pl-0">
                <div class="d-flex justify-content-between">
                    <h5>{{ $comment->user->fname }} {{ $comment->user->lname }}</h5>
                    <span class="text-muted">{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                </div>
                <div class="comment-text-single">
                    <p>{{ $comment->comment }}</p>
                </div>
                <div class="comment-respont-links">
                    <a href="#" class="module-blue pr-5">Like</a>
                    <a href="javascript:void(0)" class="module-blue pr-5" onclick="reply_div({{$comment->id}})">Reply</a>
                    <div id="reply-div-{{ $comment->id }}" class="mt-4" style="display:none;">
                        <form action="{{ route('comment.reply', $comment->id) }}" method="POST">
                            @csrf
                            <textarea name="reply" rows="7" class="form-control" required placeholder="Write Your Reply Here!"></textarea>
                            <button type="submit" class="btn btn-primary mt-4">Reply</button>
                        </form>
                    </div>
                </div>
                <div class="replied-comments">
                    @foreach($comment->replies as $reply)
                    <div class="row border-bottom py-4 my-4">
                        <div class="col-2 pr-0">
                            <img src="{{ asset('client/assets/img/navbar/profile.png')}}" alt="" class="img-fluid" width="72">
                        </div>
                        <div class="col-10 pl-0">
                            <div class="d-flex justify-content-between">
                                <h5>{{ $reply->user->fname }} {{ $reply->user->lname }}</h5>
                                <span class="text-muted">{{ Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                            </div>
                            <div class="comment-text-single">
                                <p>{{ $reply->reply }}</p>
                            </div>
                            <div class="comment-respont-links">
                                <a href="#" class="module-blue pr-5">Like</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container d-none show-on-mobile">
        @foreach($course->lessons[0]->comments as $comment)
        <div class="row mobile-comment-single">
            <div class="col-3 col-sm-2 pr-0">
                <img src="{{ asset('client/assets/img/navbar/profile.png')}}" alt="" width="50px" class="align-middle">
            </div>
            <div class="col-9 col-sm-10 pl-0 d-flex align-items-center">
                <div class="w-100">
                    <h5 class="mb-1 mobile-comment-author">{{ $comment->user->fname }} {{ $comment->user->lname }}</h5>
                    <div class="d-flex justify-content-between small">
                        <div>
                            <span class="text-muted">{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                        </div>
                        <div class="">
                            <span class="module-blue pr-3">Reply</span>
                            <span class="text-muted"><i class="far fa-heart module-blue"></i> 0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <p class="small">{{ $comment->comment }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <hr class="invisible">
    {{-- <div class="container last-section-nav">
        <div class="d-flex justify-content-between hide-on-mobile show-on-tab">
            <a href="#"><i class="fa fa-long-arrow-alt-left px-3"></i> Back to Modules Page</a>
            <a href="#">Next <i class="fa fa-long-arrow-alt-right px-3"></i> </a>
        </div>
        <div class="d-flex justify-content-between hide-on-large d-none hide-on-tab">
            <a href="#"><i class="fa fa-long-arrow-alt-left px-3"></i> Back</a>
            <a href="#">Next <i class="fa fa-long-arrow-alt-right px-3"></i> </a>
        </div>
    </div> --}}
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

    function reply_div(id)
    {
        $('#reply-div-'+id).toggle();
    }
</script>
@endsection