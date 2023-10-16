<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/stylehome.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/regForm.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <title>Drsaab</title>
</head>
<style>
    .textcont {
        position: relative;
        bottom: 10px;
        left: 41px;
    }
</style>

<body>
    {{-- topbar open --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 m-0">
        <div class="container-fluid top">
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
                    <i class="fa-brands fa-instagram" style="color: #fafafa;"></i> | <i
                        class="fa-brands fa-linkedin"style="color: #f5f7f9;"></i> |
                    <i class="fa-brands fa-facebook" style="color: #e9ecf2;"></i> | <i class="fa-solid fa-phone"
                        style="color: #fafcff;"></i> 88888888/80000000 Contact Us

                </span>
            </div>
        </div>
    </nav>



    <nav class="navbar
            navbar-expand-lg bg-body-tertiary m-0 p-0">
        <div class="container-fluid p-1">
            <a class="navbar-brand text-white fw-bold fs-2 ms-2 text-shadow" href="#">DrSaaB</a>
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
    <!-- Navbar close-->
    <div class="bradcrum">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid img-con wave p-0">


        <div class="row">
            <div class="col-md-12">
                <div class="find">

                    <form class="d-flex findMain" role="search" style="padding: 22px">

                        <input class="form-control me-2 text-black " type="search" placeholder="Search For City"
                            aria-label="Search" style="width: 30%">
                        <input class="form-control me-2 text-black " type="search" placeholder="Search Anything"
                            aria-label="Search" style="width: 50%">
                        <button class="btn btn-outline-primary text-blue" type="submit">Search</button>

                    </form>
                    <div class="textprint">


                        <h4 class="auto-type  showCursor: false autoword "></h4>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
                        <script>
                            var typed = new Typed('.auto-type', {
                                strings: ["we are always ready to help you, please fill-up your issue"],
                                typeSpeed: 150,
                                backspeed: 150, // typing speed
                                loop: true

                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="row position-relative">
                    <div class="col-3">
                        <div class="formbg p-2 text-end">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formdeg">
                                <p class="text-danger text-center fw-bold">
                                    <?php if (isset($error)) {
                                        echo $error;
                                    } ?>
                                </p>

                                <p class="text-success text-center fw-bold">
                                    <?php if (isset($success)) {
                                        echo $success;
                                    } ?>
                                </p>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                                    <input type="text" class="form-control placeholder-glow"
                                        placeholder="Fullname" name="fname" value="<?php if (isset($error)) {
                                            echo $fname;
                                        } ?>" />

                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-envelope text-success"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Your Email"
                                        name="email" value="<?php if (isset($error)) {
                                            echo $email;
                                        } ?>" />
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-phone text-success"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Your Mobile Number"
                                        name="mobile" value="<?php if (isset($error)) {
                                            echo $mobile;
                                        } ?>" />
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i
                                            class="fa-solid fa-file-lines text-success"></i></span>
                                    <input type="text" class="form-control" placeholder="Subject" name="subject"
                                        value="<?php if (isset($error)) {
                                            echo $subject;
                                        } ?>" />
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i
                                            class="fa-solid fa-message text-success"></i></span>
                                    <textarea class="form-control" placeholder="Leave your message here" name="message" cols="3"><?php if (isset($error)) {
                                        echo $message;
                                    } ?></textarea>
                                </div>

                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-success" name="signup_btn">
                                        Send Message
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- registration form --}}





        {{-- registration form close --}}


    </div>


    {{-- slider open --}}

    <div class="slider">
        <div class="container-fluid slide m-0 p-0">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-photo/covid-preventing-virus-health-healthcare-workers-concept-professional-female-nurse-doctor-blue_1258-91457.jpg?w=1060&t=st=1695114722~exp=1695115322~hmac=6b56fee5243b67c960b954ce369a505082fa9f2d19be7b37deceea8dd4561bf0"
                            class="d-block w-100" alt="..." style="height: 250px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/premium-photo/covid-preventing-virus-health-healthcare-workers-quarantine-concept-hopeful-female-nurse-doct_1258-92252.jpg?w=1060"
                            class="d-block w-100" alt="..."style="height: 250px">
                        <div class="carousel-caption d-none d-md-block">

                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/premium-photo/medical-workers-healthcare-covid19-vaccination-concept-friendly-upbeat-female-nurse-doctor-blue-scrubs-show-thumbsup-stay-optimistic-being-supportive-assure-all-good_1258-93142.jpg?w=1060"
                            class="d-block w-100" alt="..."style="height: 250px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>
    {{-- sliderclose --}}
    <div class="headingbar top1 m-0 ">

        <h4 style="padding: 20px ; margin:0px ;text-align:center;">Health, Pet & Unit Convert
            Calculator</h4>
    </div>

    <div id="carouselExampleControls" class="carousel carousel-dark slide pt-2 pb-2 top1" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">


                <div class="row">
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/bmi.webp"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BMI Calculator</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/bmi.webp"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BMI Calculator</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/pregnancy-due-date.webp"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pregnancy Due Date </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/body-fat.webp"
                                class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Body Fat Calculator</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
            <div class="carousel-item">



                <div class="row">
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/blood%20sugar%20converter.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blood Sugar Calculator</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/blood%20sugar%20converter.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blood Sugar Calculator</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/daily-water-intake.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.drlogy.com/assets/uploads/img/admin/calci/waist%20to%20height%20ratio.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Health slogun bar open --}}
    <div class="headingbar top m-0 ">

        <h4 style="padding: 20px ; margin:0px ;text-align:center;">Be at ease without disease</h4>
    </div>
    {{-- Health slogun bar close --}}


    <div class="contain-banner  ">

        <div class="row">

            <div class="banner col-6 ">
                <a href="https://www.drlogy.com/">
                    <img class="offer-img"
                        src="https://img.freepik.com/free-vector/gradient-hospital-template-design_23-2149635819.jpg"
                        alt=""></a>
            </div>
            <div class="col-md-6">
                <div class="headingbar top m-0 ">

                    <h6 style="padding: 20px ; margin:0px ;text-align:center;">If our reader is in pharmaceuticals, we
                        cannot stress enough that your tagline matters the most. People will associate what you do, your
                        agenda, and what good it will bring to them by just reading your Health tagline. It can become
                        your identity worldwide.</h6>
                </div>

            </div>
        </div>
    </div>


    {{-- aveliblityBar open  --}}


    <div class="aveliblityBar  m-0 ">

        <h4 style="padding: 20px ; margin:0px ;text-align:start;font-weight: bold;">22000+ Doctors, 20000+ Hospitals,
            Clinics & Labs
        </h4>


        {{-- aveliblityBar content open --}}

        <div id="carouselExampleCon" class="carousel carousel-dark slide pt-2 pb-2 " data-bs-ride="carousel">
            <div class="carousel-inner 1">
                <div class="carousel-item active">


                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Doctors.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"style="text-align:center;">Doctor</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Hospitals.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"style="text-align:center;">Hospital</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Pathology%20Lab.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"style="text-align:center;">Pathology Lab</h5>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Clinics.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title"style="text-align:center;">Clinics</h5>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
                <div class="carousel-item">



                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Doctors.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"style="text-align:center;">Doctor</h5>


                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Hospitals.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"style="text-align:center;">Hospital</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Pathology%20Lab.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"style="text-align:center;">Pathology Lab</h5>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Clinics.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title"style="text-align:center;">Clinics</h5>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCon"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCon"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




        {{-- aveliblityBar content close --}}
    </div>
    {{-- aveliblityBar close --}}



    {{-- about part open --}}
    <div class="headingbar  m-0 ">

        <h3 style="padding: 20px ; margin:0px ;text-align:center; font-weight: bold;">About DrSaaB</h3>
        <p style="text-align:center; margin:5px">Drlogy creates a single healthcare platform for patients,
            professionals, and
            practices to access anytime,
            anywhere, and anyway.

            Drlogy provides one-touch healthcare solutions to empower the user quick and easy store health records,
            track fitness activities, access to Doctors and practices, health information and many more surprising
            things.

            We help practices improve the depth of their relationships with patients and improve practice efficiency.
            Our core is in helping practices through tools like online appointments and practice management, but we’re
            always building new products and services.</p>
        <div class="aboutimg" style="text-align:center; margin:10px">
            <img src="https://images.drlogy.com/assets/uploads/img/general/drlogy-app/startup%20india%20-%20Drlogy.webp"
                alt="">
        </div>
    </div>

    {{-- about part open --}}





    {{-- footer open --}}
    <!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class="text-white text-center text-lg-start  footerbg">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About company</h5>

                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti.
                    </p>

                    <p>
                        Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                        molestias.
                    </p>

                    <div class="mt-4">
                        <!-- Facebook -->
                        <a type="button" class="btn btn-floating btn-primary btn-lg"><i
                                class="fab fa-facebook-f"></i></a>
                        <!-- Dribbble -->
                        <a type="button" class="btn btn-floating btn-primary btn-lg"><i
                                class="fab fa-dribbble"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn btn-floating btn-primary btn-lg"><i
                                class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn btn-floating btn-primary btn-lg"><i
                                class="fab fa-google-plus-g"></i></a>
                        <!-- Linkedin -->
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

                    <div class="form-outline form-white mb-4">
                        <input type="text" id="formControlLg" class="form-control form-control-lg" />
                        <label class="form-label" for="formControlLg">Search</label>
                    </div>

                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">New Delhi,
                                , India</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                class="ms-2">info@drsaab.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234
                                567 88</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234
                                567 89</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Opening hours</h5>

                    <table class="table text-center text-white">
                        <tbody class="font-weight-normal">
                            <tr>
                                <td>Mon - Thu:</td>
                                <td>8am - 9pm</td>
                            </tr>
                            <tr>
                                <td>Fri - Sat:</td>
                                <td>8am - 1am</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td>9am - 10pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">www.DrSaaB.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!-- End of .container -->
    {{-- footer close --}}





    <!-- Modal -->
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5  mdl-hdr " id="exampleModalLabel">
                                    User Registration
                                </h1>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0 m-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-home"
                                                        type="button" role="tab" aria-controls="pills-home"
                                                        aria-selected="true">
                                                        Login
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                        type="button" role="tab" aria-controls="pills-profile"
                                                        aria-selected="false">
                                                        Registration
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home"
                                                    role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                    <form>
                                                        <div class="row mb-3 mt-3">
                                                            <label for="inputEmail3"
                                                                class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" />
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputPassword3"
                                                                class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control"
                                                                    id="inputPassword3" />
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">
                                                            Sign in
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                                    <form>
                                                        <div class="row mb-3 mt-3">
                                                            <label for="inputEmail3"
                                                                class="col-sm-2 col-form-label">Full Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" />
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3 mt-3">
                                                            <label for="inputEmail3"
                                                                class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control"
                                                                    id="inputEmail3" />
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputPassword3"
                                                                class="col-sm-2 col-form-label">Mobile No.</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control"
                                                                    id="inputPassword3" />
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">
                                                            Sign Up
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 bg-primary">
                                            <div class="img">
                                                <img src="https://drlogy.com/assets/user-v5/img/general/Drlogy-Login.png"
                                                    alt="" class="img-fluid" />
                                            </div>

                                            <div class="textcont">
                                                <h2 class="fw-bolder text-white">DrSaaB</h2>
                                                <p class="text-white fw-bolder">1 Lakh+ patients</p>
                                                <p class="text-white fw-bolder">20,000 Doctors</p>
                                                <p class="text-white fw-bolder">10,000 Clinics,Labs & Hospitals </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
