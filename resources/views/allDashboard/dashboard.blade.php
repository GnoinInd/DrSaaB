<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Dashboard</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="{{ asset('build/assets/dashboardstyle.css') }}">
    <script src="{{ asset('js/cities.js') }}"></script>
</head>

<body className='snippet-body'>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
            <div class="textprint">


                <h4 class="auto-type text-primary "></h4>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
                <script>
                    var typed = new Typed('.auto-type', {
                    strings: ["This is admin dashboard , You can see here your admin activity"],
                    typeSpeed: 150,
                    backspeed: 150, // typing speed
                    showCursor: false, // Hide the cursor
                    loop: true
                });
                </script>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <span href="{{ route('index') }}"
                            class="nav_logo-name text-white fw-bold fs-2 ms-2 text-shadow">DrSaaB</span> </a>
                    <div class="nav_list"> <a href="#dashboardPage" class="nav_link active" id="dashboardLink">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard-MAIN</span>
                        </a>






                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button text-whire" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Menus
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <a href="#" class="nav_link" id="usersLink">
                                            <i class='bx bx-user nav_icon'></i>
                                            <span class="nav_name">Hospital</span>
                                        </a>
                                        <a href="#" class="nav_link" id="usersLink">
                                            <i class='bx bx-user nav_icon'></i>
                                            <span class="nav_name">Doctor</span>
                                        </a>
                                        <a href="#" class="nav_link" id="usersLink">
                                            <i class='bx bx-user nav_icon'></i>
                                            <span class="nav_name">Clinic</span>
                                        </a>
                                        <a href="#" class="nav_link" id="usersLink">
                                            <i class='bx bx-user nav_icon'></i>
                                            <span class="nav_name">Patholab</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="user">

                                <a href="#" class="nav_link" id="usersLink">
                                    <i class='bx bx-user nav_icon'></i>
                                    <span class="nav_name">Users</span>
                                </a>

                            </div> --}}

                            <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
                                    class="nav_name">Messages</span>
                            </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                                    class="nav_name">Bookmark</span>
                            </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                                    class="nav_name">Files</span>
                            </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                                    class="nav_name">Stats</span> </a>
                        </div>
                    </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                            class="nav_name">SignOut</span> </a>
            </nav>
        </div>

        <!-- end of sidebar -->

        {{-- main contant --}}
        <div class="height-100 bg-light" id="dashboardPage">
            <h3>Dashboard</h3>


        </div>
        {{-- hospital add view --}}
        <div class="height-100 bg-light" id="usersPage" style="display: none">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Register Your Hospital</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
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
                                                    <input type="date" id="start_date" name="start_date"
                                                        style="margin:3px " required>
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
                                                    <button type="button"
                                                        class="btn btn-primary flex-grow-1">Follow</button>
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

            <!-- Add content for the users page here -->

        </div>

        <script type='text/javascript'
            src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript'>
            document.addEventListener("DOMContentLoaded", function (event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
          const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

         
          if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
             
              nav.classList.toggle('show')
              
              toggle.classList.toggle('bx-x')
             
              bodypd.classList.toggle('body-pd')
             
              headerpd.classList.toggle('body-pd')
            })
          }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

       
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
          if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
          }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

       
      });
        </script>
        <script type='text/javascript'>
            var myLink = document.querySelector('a[href="#"]');
      myLink.addEventListener('click', function (e) {
        e.preventDefault();
      });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
    // ...
    
    // Define function to show a specific page
    const showPage = (pageId) => {
    // Hide all pages
    document.getElementById('dashboardPage').style.display = 'none';
    document.getElementById('usersPage').style.display = 'none';
    
    // Show the specified page
    document.getElementById(pageId).style.display = 'block';
    };
    
    // ...
    
    // Add event listeners to your navigation links
    const dashboardLink = document.getElementById('dashboardLink');
    const usersLink = document.getElementById('usersLink');
    
    dashboardLink.addEventListener('click', () => {
    showPage('dashboardPage');
    });
    
    usersLink.addEventListener('click', () => {
    showPage('usersPage');
    });
    
    // ...
    });
        </script>
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


    </body>

</html>