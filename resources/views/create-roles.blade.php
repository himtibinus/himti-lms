<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Position | HIMTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg" id="main-nav">
      <div class="container-fluid px-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <i class="bi bi-grid-3x3-gap-fill"></i>
        </button>
        <h1>Admin & DPI Panel</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Monday, 23 May 2022</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/profile-pic.png') }}" class="img-fluid" width="46px" height="46px" alt="Profile picture">
                Bayu Ardana
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <div class="container d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('images/profile-pic.png') }}" class="img-fluid" width="46px" height="46px" alt="Profile picture">
                    <h5>Bayu Ardana</h5>
                    <p class="nim">2401960845</p>
                  </div>
                </li>
                <hr class="my-0">
                <li><a class="dropdown-item profile-menu text-center" href="#">Change Password</a></li>
                <li><a class="dropdown-item profile-menu text-center" href="#">Privacy & Policy</a></li>
                <li><a class="dropdown-item profile-menu text-center" href="#">Terms & Condition</a></li>
                <li><a class="dropdown-item profile-menu text-center" href="#">Send Feedback</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- End of Navbar --}}

    {{-- Offcanvas --}}
    <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="container d-flex justify-content-end pt-3 sidebar-nav-close">
        <button type="button" class="btn-close align-content-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-header d-flex justify-content-center">
        <img src="{{ asset('images/LogoHimti.png') }}" class="image-fluid" width="36px" height="36px" alt="Logo Himti">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">HIMTI</h5>
      </div>
      <div class="offcanvas-body">
        <div class="container sidebar-menu d-flex align-items-center">
          <ul>
            <li class="py-3">
              <a href=""><i class="bi bi-columns-gap"></i> Dashboard</a>
            </li>
            <li class="py-3">
              <a href=""><i class="bi bi-calendar-fill"></i> Calender</a>
            </li>
            <li class="py-3">
              <a href=""><i class="bi bi-clock-fill"></i> Meeting Schedule</a>
            </li>
            <li class="py-3">
              <a href="/"><i class="bi bi-person-fill"></i> Manage Member</a>
            </li>
            <li class="py-3">
              <a href="/photo"><i class="bi bi-image"></i> View Photo</a>
            </li>
            <li class="py-3">
              <a href="admin-panel"><i class="bi bi-pencil-square"></i> Admin & DPI Panel</a>
            </li>
            <li class="py-3">
              <a href=""><i class="bi bi-gear-fill"></i> Settings</a>
            </li>
          </ul>
        </div>
        <div class="container sidebar-logout d-flex align-items-center">
          <a href="">
            <div class="row d-flex flex-row">
              <div class="col-8">
                Logout
              </div>
              <div class="col-4">
                <i class="bi bi-box-arrow-right"></i>
              </div>
            </div>
          </a>

        </div>
      </div>
    </div>
    {{-- End of Offcanvas --}}

    {{-- Main --}}
    <main class="d-flex flex-column align-items-center justify-content-center">
      <div class="container wrapper overflow-auto px-3 py-5 d-flex flex-column justify-content-between">
        <div class="body-create-roles">
            <div class="header-create-roles row d-flex my-3">
                <div class="col-md-1 px-3 d-flex justify-content-md-center justify-content-start">
                    <a href="/admin-panel" style="color: black"><i class="bi bi-arrow-left mx-3" style="font-size: 30px"></i></a>
                </div>
                <div class="col-md-11 px-3">
                    <span class="d-flex align-items-center" style="font-size: 30px">Create New Roles</span>
                </div> 
            </div>
            <div class="input-container input-group row my-5 mx-3">
                <div class="col-md-2">
                    <h5>Roles Name :</h5>
                </div>
                <div class="col-md-7">
                    <textarea class="form-control" style="height: 80px" aria-label="With textarea"></textarea>
                </div> 
            </div>
            <div class="acces-container d-flex my-5 mx-3">
                <div class="acces-text px-3">
                    <h5>Accesibility<span style="color: white">_</span>:</h5>
                </div>
                <div class="acces-list px-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckDasboard">
                            <label class="form-check-label" for="CheckDashboard">
                                Dashboard
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckCalendar">
                            <label class="form-check-label" for="CheckCalendar">
                                Calendar
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckMeetingSchedule">
                            <label class="form-check-label" for="CheckMeetingSchedule">
                                Meeting Schedule
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckManageSchedule">
                            <label class="form-check-label" for="CheckManageSchedule">
                                Manage Schedule
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckManageMember">
                            <label class="form-check-label" for="CheckManageMember">
                                Manage Member
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckViewPhoto">
                            <label class="form-check-label" for="CheckViewPhoto">
                                View Photo
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckAdminPanel">
                            <label class="form-check-label" for="CheckAdminPanel">
                                Admin & DPI Panel
                            </label>
                        </div>
                        <div class="col-xl-3 col-md-4 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="CheckSettings">
                            <label class="form-check-label" for="CheckSettings">
                                Settings
                            </label>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="button-container d-flex justify-content-end mx-5 my-3">
          <button type="button" class="btn btn-primary d-inline-flex p-0">
            <span class="button-text d-inline-flex justify-content-center align-items-center">Create</span>
            <span class="button-icon d-inline-flex justify-content-center align-items-center"><i class="bi bi-arrow-right-circle"></i></span>
          </button>     
        </div>
      </div>
    </main>
    {{-- End of Main --}}

    {{-- Footer --}}
    <footer class="d-flex justify-content-end p-3">
        <span>© 2022 HIMTI BINUS University</span>
    </footer>
    {{-- End of Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>