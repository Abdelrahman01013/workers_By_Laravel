@extends('layouts.master')
@section('css')
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
                <h4 class="content-title mb-0 my-auto">Orders</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    All Orders</span>
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
                                    <th>cutomer_name</th>
                                    <th>cutomer_number</th>

                                    <th>email</th>
                                    <th>message</th>
                                    <th>Section</th>
                                    <th>Order Date</th>

                                    <th>DELETE</th>
                                    <th>RETURN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <th>{{ $order->cutomer_name }}</th>
                                        <th>{{ $order->cutomer_number }}</th>
                                        <th>{{ $order->email }}</th>
                                        <th>{{ $order->message }}</th>
                                        <th>{{ $order->section_id }}</th>

                                        <th>{{ $order->created_at }}</th>

                                        <th>
                                            <form method="POST" action="{{ route('order.destroy', $order->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="text" value="2" hidden name="soft">
                                                <button class="btn btn-outline-danger" type="submit"
                                                    onclick="return confirm('DELETE ORDER')">DELETE</button>
                                            </form>
                                        </th>
                                        <th>
                                            <form method="POST" action="{{ route('order.destroy', $order->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="text" value="3" hidden name="soft">
                                                <button class="btn btn-outline-info" type="submit"
                                                    onclick="return confirm('RETURN TO ORDER TABLE')">RETURN</button>
                                            </form>

                                        </th>
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
