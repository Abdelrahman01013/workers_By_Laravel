@section('title')
    Add Section
@endsection
@extends('layouts.master')
@section('css')
    <!---Internal  Owl Carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!--- Internal Sweet-Alert css-->
    <link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
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
                <h4 class="content-title mb-0 my-auto">Section</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All
                    Sections</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->



    <form method="POST" action="{{ route('section.update', $section->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="formGroupExampleInput">Section Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Section Name" name="name"
                required value="{{ $section->name }}" checked>
        </div>
        <div class="mb-3">
            <label for="des" class="form-label"> Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $section->description }}"</textarea>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="logo" id="checked" value="{{ $section->logo }}"
                checked>
            <label class="form-check-label " for="checked">
                <span class="material-symbols-outlined" style="font-size:100px ;margin:20px ;margin:50px">
                    {{ $section->logo }}
                </span>

                <br>
            </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" id="home" value="home">
                <label class="form-check-label " for="home">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px ;margin:50px">
                        home
                    </span>
                </label>

                <input class="form-check-input" type="radio" name="logo" id="toggle_off" value="toggle_off">
                <label class="form-check-label" for="toggle_off">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        toggle_off
                    </span>
                </label>


                <input class="form-check-input" type="radio" name="logo" id="shower" value="shower">
                <label class="form-check-label" for="shower">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        shower
                    </span>
                </label>

                <input class="form-check-input" type="radio" name="logo" id="Plumbing" value="Plumbing">
                <label class="form-check-label" for="Plumbing">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Plumbing
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Bathroom" value="Bathroom">
                <label class="form-check-label" for="Bathroom">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Bathroom
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Water_Damage" value="Water_Damage">
                <label class="form-check-label" for="Water_Damage">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Water_Damage
                    </span>
                </label>

                <input class="form-check-input" type="radio" name="logo" id="Electric_Bolt" value="Electric_Bolt">
                <label class="form-check-label" for="Electric_Bolt">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Electric_Bolt
                    </span>
                </label>
                <br>
                <br>

                <input class="form-check-input" type="radio" name="logo" id="Microwave_Gen" value="Microwave_Gen">
                <label class="form-check-label" for="Microwave_Gen">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Microwave_Gen
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Construction" value="Construction">
                <label class="form-check-label" for="Construction">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Construction
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Source_Environment"
                    value="Source_Environment">
                <label class="form-check-label" for="Source_Environment">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Source_Environment
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Home_Health" value="Home_Health">
                <label class="form-check-label" for="Home_Health">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Home_Health
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Engineering" value="Engineering">
                <label class="form-check-label" for="Engineering">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Engineering
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Handyman" value="Handyman">
                <label class="form-check-label" for="Handyman">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Handyman
                    </span>
                </label>
                <input class="form-check-input" type="radio" name="logo" id="Build_Circle" value="Build_Circle">
                <label class="form-check-label" for="Build_Circle">
                    <span class="material-symbols-outlined" style="font-size:100px ;margin:20px">
                        Build_Circle
                    </span>
                </label>
            </div>

            <div class="text-center">
                <button class="btn btn-outline-primary">ADD SECTION</button>
            </div>







    </form>










    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/rating/ratings.js') }}"></script>
    <!--Internal  Sweet-Alert js-->
    <script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>
    <!-- Sweet-alert js  -->
    <script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/sweet-alert.js') }}"></script>
@endsection
