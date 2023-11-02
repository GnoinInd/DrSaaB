<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/bmi.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/pregnancycal.css') }}">
    <script src="{{ asset('js/bmical.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('build/assets/stylehome.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/regForm.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="favico.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="favico.png" />

    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="main.css">


    <title>Drsaab</title>
</head>
<style>
    .square-radio+label {
        background-color: transparent !important;
    }

    .square-radio:checked+label {
        background-color: #007bff !important;
        color: #000 !important;
    }

    .weekdays {
        display: flex;
        flex-direction: ;
    }

    .textcont {
        position: relative;
        bottom: 10px;
        left: 41px;
    }

    .square-radio {
        display: none;
    }

    .square-radio+label {
        width: 25px;
        /* Set the width and height to create square buttons */
        height: 25px;
        background-color: #ccc;
        /* Customize the background color */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 1px solid #555;
        /* Add a border for a square appearance */
        border-radius: 0;
        /* Remove border radius to make it square */
    }

    .square-radio:checked+label {
        background-color: #007bff;
        /* Customize the background color for checked radio buttons */
        color: #fff;
        /* Customize text color for checked radio buttons */
    }

    .hspdetails {
        display: flex;

    }



    .form-custm {
        color: var(--bs-body-color);
        background-color: var(--bs-body-bg);
        border-color: #fff !important;
        outline: 0;
        box-shadow: none !important;
    }

    .boxSd {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px !important;
    }
</style>

<body>
    {{-- topbar open --}}
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary p-0 m-0">
        <div class="container-fluid container-custmfluid top">
            <a class="navbar-brand text-white" href="#">drsaab@gnoin.com |</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white " aria-current="page" href="#">Contact Us |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Privacy |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text text-white">
                    <i class="fa-brands fa-instagram" style="color: #fafafa;"></i> | <i class="fa-brands fa-linkedin"
                        style="color: #f5f7f9;"></i> |
                    <i class="fa-brands fa-facebook" style="color: #e9ecf2;"></i> | <i class="fa-solid fa-phone"
                        style="color: #fafcff;"></i> 88888888/80000000 Contact Us

                </span>
            </div>
        </div>
    </nav>



    <nav class="navbar sticky-top
            navbar-expand-lg bg-body-tertiary m-0 p-0">
        <div class="container-fluid container-custmfluid p-1">
            <a class="navbar-brand text-white fw-bold fs-2 ms-2 text-shadow" href="{{ route('index') }}">DrSaaB</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">


                    <li class="nav-item dropdown text-white ">
                        <a class="nav-link dropdown-toggle text-white fw-bold " href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            For proffesonal
                        </a>
                        <ul class="dropdown-menu text-white">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">

                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="color: rgb(4, 115, 184); font-weight: bold;margin-right: 12px;">login</button>
                </form>
            </div>
        </div>
    </nav>