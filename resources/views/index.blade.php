<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | HIMTI</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid px-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <i class="bi bi-grid-3x3-gap-fill"></i>
        </button>
        <h1>Dashboard</h1>
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
              <a href=""><i class="bi bi-person-fill"></i> Manage Member</a>
            </li>
            <li class="py-3">
              <a href=""><i class="bi bi-image"></i> View Photo</a>
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
    <main class="d-flex justify-content-center align-items-center">
      <div class="container-fluid wrapper d-flex justify-content-center align-items-center">
        <div class="container list-event ms-5 p-3 d-flex flex-column justify-content-between">
          <div class="upper-list">
            <div class="container d-flex justify-content-center p-3 my-4 header-list-event">
              <h4>Monday, 23 May 2022</h4>
            </div>
            <div class="container body-list-event p-0">
              <div class="row event my-3">
                <div class="col-md-7 d-flex">
                  <div class="dot d-flex align-items-center">
                    <img src="{{ asset('images/dot-event-regional.png') }}" class="me-2" width="10px" height="10px" alt="dot-event-regional">
                  </div>
                  <div class="container-name">
                    <span class="event-name">Event Meeting</span>
                  </div>
                </div>
                <div class="col-md-5">
                  <span class="event-date">23 May 2022</span>
                </div>
              </div>
              <div class="row event my-3">
                <div class="col-md-7 d-flex">
                  <div class="dot d-flex align-items-center">
                    <img src="{{ asset('images/dot-meeting-event.png') }}" class="me-2" width="10px" height="10px" alt="dot-meeting-event">
                  </div>
                  <div class="container-name">
                    <span class="event-name">Event - Techno 2022</span>
                  </div>
                </div>
                <div class="col-md-5">
                  <span class="event-date">25 September 2022</span>
                </div>
              </div>
              <div class="row event my-3">
                <div class="col-md-7 d-flex">
                  <div class="dot">
                    <img src="{{ asset('images/dot-meeting-division.png') }}" class="me-2" width="10px" height="10px" alt="dot-meeting-division">
                  </div>
                  <div class="container-name">
                    <span class="event-name">Meeting - CnD 2022</span>
                  </div>
                </div>
                <div class="col-md-5">
                  <span class="event-date">23 January 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-list">
            <hr>
            <div class="container legend-list-event d-flex flex-column align-items-center">
              <h5>Legends</h5>
              <ul>
                <li class="my-2"><img src="{{ asset('images/dot-event-regional.png') }}" class="me-2" width="10px" height="10px" alt="dot-event-regional">Event Regional</li>
                <li class="my-2"><img src="{{ asset('images/dot-event-all-region.png') }}" class="me-2" width="10px" height="10px" alt="dot-event-all-region">Event All Region</li>
                <li class="my-2"><img src="{{ asset('images/dot-meeting-himti.png') }}" class="me-2" width="10px" height="10px" alt="dot-meeting-himti">Meeting HIMTI</li>
                <li class="my-2"><img src="{{ asset('images/dot-meeting-event.png') }}" class="me-2" width="10px" height="10px" alt="dot-meeting-event">Meeting Event</li>
                <li class="my-2"><img src="{{ asset('images/dot-meeting-division.png') }}" class="me-2" width="10px" height="10px" alt="dot-meeting-division">Meeting Division</li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="container calendar p-3 me-5 d-flex flex-column justify-content-center">
          <div class="container calendar-header d-flex justify-content-center align-items-center p-3">
            <div class="month-picker">
              <span class="month-change mx-3 p-1" id="prev-month">
                <i class="bi bi-chevron-left"></i>
              </span>
              <span class="mx-5"><span id="month">February </span><span id="year">2022</span></span>
              <span class="month-change mx-3 p-1" id="next-month">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
          <div class="container calender-body p-3">
            <div class="calendar-week-day my-3 align-items-center">
              <div class="my-3">Sun</div>
              <div class="my-3">Mon</div>
              <div class="my-3">Tue</div>
              <div class="my-3">Wed</div>
              <div class="my-3">Thu</div>
              <div class="my-3">Fri</div>
              <div class="my-3">Sat</div>
            </div>
            <div class="calendar-days my-3 align-items-center">
              <div class="my-3"><span class="px-3 py-2">1</span></div>
              <div class="my-3"><span class="px-3 py-2">2</span></div>
              <div class="my-3"><span class="px-3 py-2">3</span></div>
              <div class="my-3"><span class="px-3 py-2">4</span></div>
              <div class="my-3"><span class="px-3 py-2">5</span></div>
              <div class="my-3"><span class="px-3 py-2">6</span></div>
              <div class="my-3"><span class="px-3 py-2">7</span></div>
  
              <div class="my-3"><span class="px-3 py-2">1</span></div>
              <div class="my-3"><span class="px-3 py-2">2</span></div>
              <div class="my-3"><span class="px-3 py-2">3</span></div>
              <div class="my-3"><span class="px-3 py-2">4</span></div>
              <div class="my-3"><span class="px-3 py-2">5</span></div>
              <div class="my-3"><span class="px-3 py-2">6</span></div>
              <div class="my-3"><span class="px-3 py-2">7</span></div>
  
              <div class="my-3"><span class="px-3 py-2">1</span></div>
              <div class="my-3"><span class="px-3 py-2">2</span></div>
              <div class="my-3"><span class="px-3 py-2">3</span></div>
              <div class="my-3"><span class="px-3 py-2">4</span></div>
              <div class="my-3"><span class="px-3 py-2">5</span></div>
              <div class="my-3"><span class="px-3 py-2">6</span></div>
              <div class="my-3"><span class="px-3 py-2">7</span></div>
  
              <div class="my-3"><span class="px-3 py-2">1</span></div>
              <div class="my-3"><span class="px-3 py-2">2</span></div>
              <div class="my-3"><span class="px-3 py-2">3</span></div>
              <div class="my-3"><span class="px-3 py-2">4</span></div>
              <div class="my-3"><span class="px-3 py-2">5</span></div>
              <div class="my-3"><span class="px-3 py-2">6</span></div>
              <div class="my-3"><span class="px-3 py-2">7</span></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    {{-- End of Main --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>