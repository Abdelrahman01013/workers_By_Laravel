@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
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
    <form method="POST" action="{{ route('admin.update', $user->id) }}">
        @csrf
        @method('PATCH')
        <div class="mb-5">
            <label for="" class="form-label">Name</label>
            <input type="name" class="form-control" name="name" placeholder="name" value="{{ $user->name }}">
        </div>

        <div class="mb-5">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="abc@mail.com"
                value="{{ $user->email }}">
            <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>

        <div class="mb-5">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="text-center">
            <button class="btn btn-outline-primary" type="submit"> UPDATE</button>
        </div>
        <!-- row closed -->
        </div>
        <!-- Container closed -->
        </div>
        <!-- main-content closed -->
    @endsection
    @section('js')
    @endsection
