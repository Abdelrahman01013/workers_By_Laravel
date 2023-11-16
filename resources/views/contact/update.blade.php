@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
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
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



    @foreach ($contacts as $contact)
        <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="m-5">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId"
                    placeholder="abc@mail.com" value="{{ $contact->email }}">
            </div>
            <div class="m-5">
                <label for="" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                    value="{{ $contact->phone }}">

            </div>
            <div class="m-5">
                <label for="" class="form-label">location</label>
                <input type="text" class="form-control" name="location" placeholder="location"
                    value="{{ $contact->location }}">

            </div>

            <div class="m-5">
                <label class="form-label">header</label>
                <textarea class="form-control" name="header" id="" rows="3">{{ $contact->header }}</textarea>


            </div>


            <div class="text-center">
                <label for='header_photo'>


                    <span class="material-symbols-outlined" style="font-size: 100px">
                        download_for_offline
                    </span>
                    <br>
                    Choose Header Photo
                </label>
                <input type="file" name="header_photo" id="header_photo" hidden>

            </div>

            <div class="m-5">
                <label class="form-label">about</label>
                <textarea class="form-control" name="about" id="" rows="3">{{ $contact->about }}</textarea>
            </div>
            <div class="text-center">
                <label for='about_photo'>


                    <span class="material-symbols-outlined" style="font-size: 100px">
                        download_for_offline
                    </span>
                    <br>
                    Choose About Photo
                </label>
                <input type="file" name="about_photo" id="about_photo" hidden>

            </div>

            <div class="m-5">
                <label class="form-label">footer</label>
                <textarea class="form-control" name="footer" id="" rows="3">{{ $contact->footer }}</textarea>
            </div>

            <div class="text-center">
                <label for='footer_photo'>


                    <span class="material-symbols-outlined" style="font-size: 100px">
                        download_for_offline
                    </span>
                    <br>
                    Choose Footer Photo
                </label>
                <input type="file" name="footer_photo" id="footer_photo" hidden>

            </div>

            <br>
            <br>

            <div class="text-center">
                <button class="btn btn-outline-success" type="submit">UPDATE HOME </button>
            </div>


        </form>
    @endforeach
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
