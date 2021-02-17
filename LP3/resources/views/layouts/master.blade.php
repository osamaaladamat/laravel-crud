<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" />

        <script src="https://kit.fontawesome.com/5a9b023f7c.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ URL::asset('css/nav_and_footer.css') }}" />
        @yield('head')
    </head>

    <body>
        <header>
            <!--- Navbar --->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand text-white" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>OCA</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse"
                        aria-controls="nvbCollapse">
                        <a class="navbar-brand text-white" href="#">
                            <i class="fa fa-bars"></i></a>
                    </button>
                    <div class="collapse navbar-collapse" id="nvbCollapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item pl-1">
                                <a class="nav-link" href="/"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin"><i class="fa fa-th-list fa-fw mr-1"></i>Dashboard</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link" href="users/create"><i
                                        class="fa fa-sign-in fa-fw mr-1"></i>Regester</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--# Navbar #-->
        </header>
        <div class="container">
            @yield('main')
        </div>
        <!--- Footer --->
        <footer>
            <div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-light text-center">
                                    <h5 class="card-title text-white display-4" style="font-size: 30px">
                                        Ammman, Jordan
                                    </h5>
                                    <p class="d-inline lead">
                                        Adam Abusamra © 2020<br />
                                        <a href="#" class="text-light d-block lead">Laravel Mini</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-white display-4" style="font-size: 30px">
                                        Contact
                                    </h5>
                                    <a class="text-light d-block lead" style="margin-left: -20px" href="#"><i
                                            class="fa fa-phone mr-2"></i>+0770631308</a>
                                    <a class="text-light d-block lead" href="#"><i
                                            class="fa fa-envelope mr-2"></i>adamabusamra@gmail.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card bg-secondary border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-white display-4" style="font-size: 30px">
                                        Social Media
                                    </h5>

                                    <a class="text-light" href="#"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a>

                                    <a class="text-light" href="#"><i class="fa fa-twitter-square fa-fw fa-2x"></i></a>

                                    <a class="text-light" href="#"><i class="fa fa-instagram fa-fw fa-2x"></i></a>

                                    <a class="text-light" href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--# Footer #-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

</html>
