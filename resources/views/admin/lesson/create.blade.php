@extends('layouts.master')

@section('title', 'Create Lesson')

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
                        <li class="breadcrumb-item"><a href="{{ route('admin.course.lesson.index', $course->id) }}">Manage Lessons</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Lesson</li>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="Title">Lesson Title</label>
                                <input type="text" name="lesson_title" class="form-control" placeholder="Lesson Title" required value="{{ old('lesson_title') }}" />
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="Content">Lesson Content</label>
                                <textarea name="lesson_content" cols="30" rows="10" class="form-control" required>{{ old('lesson_content') }}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="VideoURL">Upload Video</label>
                                <input type="file" name="video_url" required class="form-control" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-success btn-block mt-4" value="Save" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection