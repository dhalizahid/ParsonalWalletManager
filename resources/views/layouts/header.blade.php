<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <!-- CSS only -->
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--fontwosome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    {{-- Metarial Icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    {{-- fontawsome link --}}
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/regular.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/solid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/brands.min.css')}}">




    <!-- {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link href="/css/main.css" rel="stylesheet" media="all"> -->


    <!-- {{-- data table --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script> -->


    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Vendor CSS-->
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>

<body>
    <!-- Navigation-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light  py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><img src="/assets/img/logo.jpg" class="navbar-img" style="height:40px; width:40px; border-radius: 20px; " alt=""></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item d-flex">
                        <i class="fa-solid fa-user text-info"></i>
                        <a class="nav-link" href="/profile/edit">Edit profile</a>
                    </li>
                    <li class="nav-item"><a class="nav-link btn btn-success" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href=" /income">Income</a></li>
                    <li class="nav-item"><a class="nav-link" href="/income/catagory">Income_Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="/incomeTable">Income_Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="/expense">Expense</a></li>
                    <li class="nav-item"><a class="nav-link" href="/expense/catagory">Expense Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="index1.php?view=contact">Contact</a></li>
                    <div class="dropdown ">
                        <button class="item d-flex ">Report
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-content">
                            <a class="drop_a" href="/incomeReport">Income Report</a>
                            <a class="drop_a" href="/expenseReport">Expence Report</a>
                            <a class="drop_a" href="/totalReport">Total Report</a>
                        </div>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="">
                         Authentication 
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form> 
                    </li>

                </ul>
            </div>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <!-- <div class="row"> -->
            <div class="col-md-2">
                <a class="navbar-brand col-md-10 offset-md-1 " href="#"><img style="height:40px; width:40px; border-radius: 5px; " alt="" src="/assets/img/logo.jpg"></a>
            </div>
            <div class="col-md-6 offset-md-1 ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav_menu me-auto mb-2 mb-lg-0 d-flex">
                        <li class="nav-item"><a class="nav-link  " href="/home">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Income
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link dropdown-item" href=" /income">Income</a></li>
                                <li><a class="nav-link dropdown-item" href="/income/catagory">Income Category</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Expense
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link dropdown-item" href="/expense">Expense</a></li>
                                <li><a class="nav-link dropdown-item" href="/expense/catagory">Expense Category</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Report
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="drop_a dropdown-item nav-link" href="/report"> Report</a>
                                </li>
                                <li>
                                    <a class="drop_a dropdown-item nav-link" href="/report/income">Income Report</a>
                                </li>
                                <li>
                                    <a class="drop_a dropdown-item nav-link" href="/report/expense">Expence Report</a>
                                </li>
                                <li>
                                    <a class="drop_a dropdown-item nav-link" href="/report/all">Total Report</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.php?view=contact">Contact</a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <ul>
                    <li class="nav-item dropdown user-menu mt-3">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" data-toggle="dropdown">
                            @if(Auth::user()->Photo)
                            <img src="/uploads/{{ Auth::user()->Photo }}" class="user-image img-circle elevation-2" alt="User Photo">
                            @endif
                            <b class="d-none d-md-inline">{{ Auth::user()->name }}</b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right mt-3" style="border-radius: 0.5rem">
                            <!-- User image -->
                            <li class="">
                                {{-- @if(Auth::user()->Photo)
                                <img src="/uploads/{{ Auth::user()->Photo }}" class="user-image img-circle elevation-2" alt="User Photo">
                                @endif --}}
                                <p>
                                    {{-- {{ Auth::user()->name }}
                                    <small>Member since {{ Auth::user()->created_at->format('D-M. Y') }}</small> --}}
                                </p>
                            </li>
                            <li class="text-center py-1">
                                <a href="profile/show" class="text-navy nav-link"><i class="fa-solid fa-user mr-3 text-navy"></i>Profile</a>

                            </li>
                            <!-- Menu Footer-->
                            <li class="text-center">
                                <a href="#" class="text-navy nav-link d-flex mx-4" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mr-2 ml-1 text-navy" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>LogOut
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead mb-5 ">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-black font-weight-bold" style="position:absolute; margin-top: -50px;">WellCome To Wallet Manegment App</h1>
                    <hr class="divider" />
                </div>
            </div>
        </div>
    </header>