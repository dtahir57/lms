@extends('layouts.master')

@section('title', 'Edit Course')

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
                        <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.course.update', $course->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="course_title" class="form-control" placeholder="Course Title" required value="{{ $course->course_title }}" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="submit" class="btn btn-success btn-block" value="Update" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection