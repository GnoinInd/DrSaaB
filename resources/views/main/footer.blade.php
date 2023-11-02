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
                    <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-dribbble"></i></a>
                    <!-- Twitter -->
                    <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
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
                                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                                    Login
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-profile" type="button" role="tab"
                                                    aria-controls="pills-profile" aria-selected="false">
                                                    Registration
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab" tabindex="0">
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
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full
                                                            Name</label>
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
