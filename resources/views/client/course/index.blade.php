@extends('layouts.client')

@section('title', 'Courses')

@section('content')
<main class="main-content">
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
</main>
@endsection