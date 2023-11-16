@section('title')
    Admins
@endsection
@extends('layouts.master')
@section('css')
@endsection
@section('title')
    Sections
@endsection
@section('page-header')
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
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admins</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All
                    Admins</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">


        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Sections</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>DELETE</th>
                                    <th>update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>

                                        <td>
                                            <form method="POST" action="{{ route('admin.destroy', $user->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger" type="submit"
                                                    onclick="return confirm('DELETE ADMAIN USER {{ $user->name }}')">DELET</button>
                                            </form>
                                        </td>

                                        <td>

                                            <a href="{{ route('admin.edit', $user->id) }}"
                                                class="btn btn-outline-info">UPDATE</a>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
        </div>


    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
