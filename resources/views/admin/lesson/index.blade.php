@extends('layouts.master')

@section('title', 'Manage Lessons')

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
                        <li class="breadcrumb-item active" aria-current="page">Manage Lessons</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7">
            <div class="text-right upgrade-btn">
                <a href="{{ route('admin.course.lesson.create', $course->id) }}" class="btn btn-danger text-white"><i class="mdi mdi-plus"></i> Add New Lesson</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if(session('created'))
                <li class="alert alert-success">{{ session('created') }}</li>
            @endif
            @if(session('updated'))
                <li class="alert alert-success">{{ session('updated') }}</li>
            @endif
            @if(session('deleted'))
                <li class="alert alert-success">{{ session('deleted') }}</li>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Video</th>
                                    <th>Lesson Title</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th style="width: 300px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lessons as $lesson)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <iframe src="{{ $lesson->video_url }}" width="360" height="240" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                    </td>
                                    <td>{{ $lesson->lesson_title }}</td>
                                    <td>{{ $lesson->created_at }}</td>
                                    <td>{{ $lesson->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.course.lesson.show', [$course->id, $lesson->id]) }}" role="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Lesson</a>
                                        <a href="{{ route('admin.course.lesson.edit', [$course->id, $lesson->id]) }}" role="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="{{ route('admin.course.lesson.destroy', [$course->id, $lesson->id]) }}" role="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection