@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    @foreach ($errors->all() as $error)
        <li class="text-danger p-2">{{ $error }}</li>
    @endforeach
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <form method="POST" action="{{ route('admin.store') }}">
        @csrf
        @method('POST')
        <div class="mb-5">
            <label for="" class="form-label">Name</label>
            <input type="name" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="mb-5">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="abc@mail.com">

        </div>

        <div class="mb-5">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="text-center">
            <button class="btn btn-outline-success" type="submit">ADD USER</button>
        </div>
        <!-- row closed -->
        </div>
        <!-- Container closed -->
        </div>
        <!-- main-content closed -->
    @endsection
    @section('js')
    @endsection
