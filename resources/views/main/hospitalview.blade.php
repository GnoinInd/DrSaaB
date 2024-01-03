<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Register Your Hospital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
            <div class="social">
                <i class="fa-brands fa-facebook" style="color: #1a54b7;"></i>
                <i class="fa-brands fa-instagram" style="color: #d60575;"></i>
                <i class="fa-brands fa-linkedin" style="color: #0c59df;"></i>
                <i class="fa-solid fa-globe globe" style="color: #0726c0;"> <span
                        style="font-family: 'YourFontName';">www.DrSaaB.com</span></i>
                <i class="fa-solid fa-phone phone"><span style="font-family: 'YourFontName';"> 333 23543 234 |
                        8373835881</span></i>


            </div>
            {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
<div class="container-fluid bg-primary">
    <div class="col-12">
        <div class="row ">
            <div class="col-6 img-sec">
                <div class="card">
                    <h5 class="card-header txt text-bg">Hospital Information</h5>
                    <div class="card-body">
                        <form method="POST" action="/register/store">


                            <div class="row">
                                <label class="txt" for="">Hospital Name:</label>
                                <div class="col-8">

                                    <input type="text" placeholder="last name" class="reg-form">
                                </div>
                            </div>
                            <div class="row dependancy">
                                <div class="col-6 ">
                                    <label for="state" class="txt">Select Hospital State:</label>
                                    <select id="state" onchange="updateDependencies()">
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <!-- Add more states here -->
                                    </select>
                                </div>

                                <div class="col-6 w-80">
                                    <label for="dependencies" class="txt">Select Hospital City:</label>
                                    <select id="dependencies" disabled>
                                        <option>Select a state to view its dependencies</option>
                                    </select>
                                </div>
                                {{-- <label for="">Aplicant Full Name :</label>
                                <div class="col-6 w-80">

                                    <input type="text" class="reg-form">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="last name" class="reg-form">
                                </div> --}}
                            </div>
                            <div class="row calender">
                                <div class="calender-body">
                                    <label class="txt" for="">Doctor Availiblity Date and Number :</label>
                                    <div class="col-6 ">
                                        <label for="start_date" class="txt">Start Date:</label>
                                        <input type="date" id="start_date" name="start_date" style="margin:3px "
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <label for="end_date" class="txt">End Date:</label>
                                        <input type="date" id="end_date" name="end_date" required>
                                    </div>

                                    <div class="col-4 ">
                                        <label for="availability" class="txt">Number of Doctor
                                            Available:</label>
                                        <input type="text" id="availability" name="availability" required>
                                    </div>
                                </div>
                                {{-- <div class="col-6 w-80">

                                    <input type="text" class="reg-form">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="last name" class="reg-form">
                                </div> --}}
                            </div>
                            <div class="row">
                                <label for="" class="txt">Aplicant Full Name :</label>
                                <div class="col-12 upload">
                                    <input type="file" name="image" id="image" accept="image/*" required>
                                </div>




                            </div>
                            <input type="submit" value="Submit" class="submt-btn">

                        </form>
                    </div>

                </div>

            </div>

            <div class="col-6 border border-box 2px img-sec">
                <div class="cardProfileview">
                    {{-- profile template --}}
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                        alt="Generic placeholder image" class="img-fluid"
                                        style="width: 180px; border-radius: 10px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1 text-white">Danny McLoan</h5>
                                    <p class="mb-2 pb-1" style="color: #f0ebeb;">Senior
                                        Admin</p>
                                    <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                        style="background-color: #efefef;">
                                        <div>
                                            <p class="small text-muted mb-1">Articles</p>
                                            <p class="mb-0">41</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Followers</p>
                                            <p class="mb-0">976</p>
                                        </div>
                                        <div>
                                            <p class="small text-muted mb-1">Rating</p>
                                            <p class="mb-0">8.5</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-1">
                                        <button type="button"
                                            class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                                        <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- profile template end --}}


                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // Define an object to map states to their dependent territories/regions
            const stateDependencies = {
            "Karnataka": ["Bangalore", "Mangalore"],
            "Andhra Pradesh": ["Visakhapatnam (Vizag)","Vijayawada","Tirupati"],
            "Arunachal Pradesh": ["Itanagar", "Naharlagun"],
            "West Bengal": ["Kolkata", "Siliguri"],
            
            // Add more state dependencies here
            };
            
            // Function to update the dependent territories/regions dropdown
            function updateDependencies() {
            const stateDropdown = document.getElementById("state");
            const dependenciesDropdown = document.getElementById("dependencies");
            const selectedState = stateDropdown.value;
            
            // Clear the current dependencies dropdown
            // dependenciesDropdown.innerHTML = "";
            dependenciesDropdown.length = 0;
            
            if (selectedState === "Select a state to view its dependencies") {
            dependenciesDropdown.disabled = true;
            } else {
            // Enable the dependencies dropdown and populate it with the selected state's dependencies
            dependenciesDropdown.disabled = false;
            const dependencies = stateDependencies[selectedState] || [];
            dependencies.forEach((dependency) => {
            const option = document.createElement("option");
            option.value = dependency;
            option.text = dependency;
            dependenciesDropdown.appendChild(option);
            });
            }
            }
            
            // Initialize the form
            updateDependencies();
</script>