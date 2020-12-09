@extends('layouts.master')

@section('title', 'View Lesson')

@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Dashboard</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.course.index') }}">Courses</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.course.lesson.index', $course_id) }}">Manage Lessons</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $lesson->lesson_title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>{{ $lesson->lesson_title }}</h5>
                    <hr>
                    {!! $lesson->lesson_content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection