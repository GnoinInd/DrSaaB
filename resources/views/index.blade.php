@include('main.header')


<!-- Navbar close-->
<div class="container-fluid container-custmfluid img-con wave p-0">


    <div class="row">
        <div class="col-md-12">
            <div class="find">

                <form class="d-flex findMain" role="search" style="padding: 22px">

                    <input class="form-control me-2 text-black " type="search" placeholder=" Search For State"
                        aria-label="Search" style="width: 30%">
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
        strings: ["we are always ready to help you, please fill up your issue"],
        typeSpeed: 150,
        backspeed: 150, // typing speed
        showCursor: false, // Hide the cursor
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
                        <form action="{{ route('indexform') }}" method="POST" class="formdeg">
                            @csrf
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
                                <input type="text" class="form-control placeholder-glow" placeholder="Fullname"
                                    name="name" value="<?php if (isset($error)) {
                                        echo $fname;
                                    } ?>" />

                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-envelope text-success"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Your Email" name="email"
                                    value="<?php if (isset($error)) {
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
                                <input type="text" class="form-control" placeholder="Subject" name="subject" value="<?php if (isset($error)) {
                                        echo $subject;
                                    } ?>" />
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-message text-success"></i></span>
                                <textarea class="form-control" placeholder="Leave your message here" name="message"
                                    cols="3"><?php if (isset($error)) {
                                    echo $message;
                                } ?></textarea>
                            </div>

                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-success" name="">
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
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
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
                        class="d-block w-100" alt="..." style="height: 250px">
                    <div class="carousel-caption d-none d-md-block">

                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/premium-photo/medical-workers-healthcare-covid19-vaccination-concept-friendly-upbeat-female-nurse-doctor-blue-scrubs-show-thumbsup-stay-optimistic-being-supportive-assure-all-good_1258-93142.jpg?w=1060"
                        class="d-block w-100" alt="..." style="height: 250px">
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
                            <a href="{{ route('bmicalculator') }}" class="btn btn-primary">Go somewhere</a>
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
                            <a href="{{ route('pregnancycal') }}" class="btn btn-primary">Go somewhere</a>
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
                            <a href="{{ route('bodyfatcal') }}" class="btn btn-primary">Go somewhere</a>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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


{{-- aveliblityBar open --}}


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
                            <a href="{{ route('doctors') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Doctors.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">Doctor</h5>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('hospitals') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Hospitals.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">Hospital</h5>

                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('patholabs') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Pathology%20Lab.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">Pathology Lab</h5>

                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('clinics') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Clinics.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title" style="text-align:center;">Clinics</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>




            </div>
            <div class="carousel-item">



                <div class="row">
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('doctors') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Doctors.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">Doctor</h5>


                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('hospitals') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Hospitals.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">Hospital</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('patholabs') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Pathology%20Lab.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">Pathology Lab</h5>

                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <a href="{{ route('clinics') }}">
                                <img src="https://images.drlogy.com/assets/uploads/img/user/home/health/Clinics.webp"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title" style="text-align:center;">Clinics</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCon" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCon" data-bs-slide="next">
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
@include('main.footer')