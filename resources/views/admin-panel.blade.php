<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin & DPI Panel | HIMTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}">
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
      <div class="wrapper overflow-auto row">
        <div class="position-wrapper col-lg-6 d-flex align-items-center h-100">
            <div class="container position-container">
                <div class="container header-position d-flex justify-content-center mb-1">
                    <a href="/create-position"><button type="button" class="btn btn-light">Create New Position</button></a>
                </div>
                <div class="container body-position d-flex flex-column justify-content-center align-items-center">
                    <div class="header-body text-center py-3">
                        <h4>Position</h4>
                    </div>
                    <div class="list-body w-50">
                      {{-- Data 1 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>Chairman</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 2 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>Chairman 2</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 3 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>President of Alam Sutera</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 4 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>President of Senayan</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 5 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>President of Senayan</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 6 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>President of Bandung</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 7 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>President of Malang</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                        {{-- Data 8 --}}
                        <div class="position-name row py-2">
                          <div class="col-lg-8 col-md-6">
                              <span>Chairman</span>
                          </div>
                          <div class="col-lg-4 col-md-6 d-flex justify-content-end">
                              <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                              <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-position mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
        <div class="roles-wrapper col-lg-6 d-flex align-items-center h-100">
          <div class="container roles-container">
            <div class="container header-roles d-flex justify-content-center mb-1">
              <a href="/create-roles"><button type="button" class="btn btn-light">Create New Roles</button></a>
            </div>
            <div class="container body-position d-flex flex-column justify-content-center align-items-center">
              <div class="header-body text-center py-3">
                <h4>Roles</h4>
              </div>
              <div class="list-body w-50">
                {{-- Data 1 --}}
                <div class="roles-name row py-2">
                  <div class="col-md-8">
                      <span>Admin</span>
                  </div>
                  <div class="col-md-4 d-flex justify-content-end">
                      <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                      <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                  </div>
                </div>
                {{-- Data 2 --}}
                <div class="roles-name row py-2">
                  <div class="col-md-8">
                      <span>DPI</span>
                  </div>
                  <div class="col-md-4 d-flex justify-content-end">
                      <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                      <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                  </div>
                </div>
                {{-- Data 3 --}}
                <div class="roles-name row py-2">
                  <div class="col-md-8">
                      <span>General Manager</span>
                  </div>
                  <div class="col-md-4 d-flex justify-content-end">
                      <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                      <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                  </div>
                </div>
                {{-- Data 4 --}}
                <div class="roles-name row py-2">
                  <div class="col-md-8">
                      <span>DPI Event</span>
                  </div>
                  <div class="col-md-4 d-flex justify-content-end">
                      <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                      <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                  </div>
                </div>
                {{-- Data 5 --}}
                <div class="roles-name row py-2">
                  <div class="col-md-8">
                      <span>Activist</span>
                  </div>
                  <div class="col-md-4 d-flex justify-content-end">
                      <a href=""><i class="bi bi-pencil-fill mx-1"></i></a>
                      <a href=""><i class="bi bi-trash-fill mx-1"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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