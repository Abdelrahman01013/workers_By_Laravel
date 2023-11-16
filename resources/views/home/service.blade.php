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

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" />


    <!-- Custom styles for this template -->
    <link href=" {{ URL::asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ URL::asset('css/responsive.css') }} " rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">

                </div>
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
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2> Our Services </h2>
            </div>
            <div class="row">
                @foreach ($section as $sec)
                    <div class="col-sm-6 col-md-4 mx-auto">
                        <div class="box ">
                            <div class="img-box">

                                <span class="material-symbols-outlined" style="font-size: 50px">
                                    {{ $sec->logo }}
                                </span>
                            </div>

                            <div class="detail-box">
                                <h5>
                                    {{ $sec->name }}
                                </h5>
                                <p>
                                    {{ $sec->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>

        </div>
    </section>

    <!-- end service section -->

    <!-- info section -->



    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayDateYear"></span> Abdelrahman

            </p>
        </div>
    </footer>
    <!-- footer section -->

    <script src=" {{ URL::asset('js/jquery-3.4.1.min.js') }} "></script>
    <script src=" {{ URL::asset('js/bootstrap.js') }} "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src=" {{ URL::asset('js/custom.js') }} "></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->


</body>

</html>
