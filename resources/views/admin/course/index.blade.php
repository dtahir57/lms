@extends('layouts.master')

@section('title', 'Manage Courses')

@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Dashboard</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7">
            <div class="text-right upgrade-btn">
                <a href="{{ route('admin.course.create') }}" class="btn btn-danger text-white"><i class="mdi mdi-plus"></i> Add New Course</a>
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
                                    <th>Course Title</th>
                                    <th>No. Of Chapters</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th style="width: 250px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                @php
                                    $chapters_count = App\Models\Lesson::where('course_id', $course->id)->get()->count();
                                @endphp
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $course->course_title }}</td>
                                    <td>{{ $chapters_count }} Chapters</td>
                                    <td>{{ $course->created_at }}</td>
                                    <td>{{ $course->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.course.lesson.index', $course->id) }}" class="btn btn-info btn-sm" role="button">Manage Lessons</a>
                                        <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-primary btn-sm" role="button">Edit</a>
                                        <a href="{{ route('admin.course.destroy', $course->id) }}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $courses->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection