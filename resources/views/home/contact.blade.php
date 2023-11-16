<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Inance</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" />


    <!-- Custom styles for this template -->
    <link href=" {{ URL::asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ URL::asset('css/responsive.css') }} " rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">

    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        Inance
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}"> About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    </header>
    <!-- end header section -->
    </div>


    <!-- contact section -->
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Contact Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('add_order') }}">
                        <div>
                            <input type="text" placeholder="Name" name="name" class="text-primary" required />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number" name='phone'
                                class="text-primary"required />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name='email' class="text-primary" required />
                        </div>

                        <div>


                            <select class="form-select" aria-label="Default select example" class="text-primary"
                                name='section_id'>
                                {{-- <option selected>Open this select menu</option> --}}
                                @foreach ($section as $sec)
                                    <option value="{{ $sec->id }}">{{ $sec->name }}</option>
                                @endforeach

                            </select>


                            <br>
                            <br>
                            <input type="text" class="text-primary" placeholder="Message" name='message'
                                class="text-primary" required />
                        </div>
                        <div class="d-flex ">
                            <button type="submit">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- end contact section -->


    <!-- info section -->



    <!-- end info_section -->

    <!-- footer section -->


    <script src=" {{ URL::asset('js/jquery-3.4.1.min.js') }} "></script>
    <script src=" {{ URL::asset('js/bootstrap.js') }} "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src=" {{ URL::asset('js/custom.js') }} "></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
