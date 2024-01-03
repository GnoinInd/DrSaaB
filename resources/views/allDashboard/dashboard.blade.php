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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                        <a href="#" class="nav_link" id="docLink">
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

            @include('main.hospitalview')
            <!-- Add content for the users page here -->

        </div>
        {{-- Doctor add view --}}
        <div class="height-100 bg-light" id="docPage" style="display: none">
            @include('main.docview')


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
    document.getElementById('docPage').style.display = 'none';
    
    // Show the specified page
    document.getElementById(pageId).style.display = 'block';
    };
    
    // ...
    
    // Add event listeners to your navigation links
    const dashboardLink = document.getElementById('dashboardLink');
    const usersLink = document.getElementById('usersLink');
    const docLink = document.getElementById('docLink');
    
    dashboardLink.addEventListener('click', () => {
    showPage('dashboardPage');
    });
    
    usersLink.addEventListener('click', () => {
    showPage('usersPage');
    });

    docLink.addEventListener('click', () => {
    showPage('docPage');
    });
    
    // ...
    });
        </script>

        



    </body>

</html>