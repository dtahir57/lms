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
@endsection