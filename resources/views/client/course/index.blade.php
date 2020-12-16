@extends('layouts.client')

@section('title', 'Courses')

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
                    <h4 class="semibold mb-3">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h4>
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
                    <h4>Modules</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam por invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    @foreach($courses as $course)
                    @php
                        $lesson = App\Models\Lesson::where('course_id', $course->id)->latest()->first();
                        $enrolled = App\Models\UserEnrollInCourse::where('user_id', Auth::user()->id)->where('course_id', $course->id)->first();
                    @endphp
                    <hr class="invisible">
                    <a href="{{ route('course.show', $course->id) }}" class="text-decoration-none text-dark">
                        <div class="progress-block">
                            <div class="above-progress-line d-flex justify-content-between align-items-center pb-1">
                                <div>
                                    <h6>{{ $course->course_title }}</h6>
                                    <h5>
                                        @if ($lesson)
                                        {{ $lesson->lesson_title }}
                                        @else
                                        No Lesson Found!
                                        @endif
                                    </h5>
                                </div>
                                <div>
                                    <i class="fa fa-chevron-right float-right align-middle"></i>
                                </div>
                            </div>
                            <div class="progress-line">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            @if ($enrolled)
                            <p class="mt-3">Enrolled</p>
                            @else
                            <p class="text-info mt-3">Enroll Now!</p>
                            @endif
                        </div>
                    </a>
                    <hr class="invisible {{($loop->last)?'large-space':''}}">
                    @endforeach
                </div>
                {!! $courses->render() !!}
            </div>
        </div>
    </div>
</main>
{{-- <main class="main-content">
    <div class="container mt-5">
        <div class="row">
            @foreach($courses as $course)
            @php
                $lessons_count = App\Models\Lesson::where('course_id', $course->id)->get()->count();
                $enrolled = App\Models\UserEnrollInCourse::where('user_id', Auth::user()->id)->where('course_id', $course->id)->first();
            @endphp
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5><a href="{{ route('course.show', $course->id) }}">{{ $course->course_title }}</a></h5>
                        <p class="text-info mt-4">{{ $lessons_count }} Lessons</p>
                        <hr>
                        @if($enrolled)
                        <button class="btn btn-secondary float-right" disabled>Enrolled</button>
                        @else
                        <a href="{{ route('course.enroll', $course->id) }}" role="button" class="btn btn-success float-right">Enroll Now</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main> --}}
@endsection