<div>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg" id="main-nav">
        <div class="container-fluid px-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="bi bi-grid-3x3-gap-fill"></i>
            </button>
            {{ $Title }}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Monday, 23 May 2022</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/profile-pic.png') }}" class="img-fluid" width="46px"
                                height="46px" alt="Profile picture" />
                            Bayu Ardana
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <div class="container d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{ asset('images/profile-pic.png') }}" class="img-fluid" width="46px"
                                        height="46px" alt="Profile picture" />
                                    <h5>Bayu Ardana</h5>
                                    <p class="nim">2401960845</p>
                                </div>
                            </li>
                            <hr class="my-0" />
                            <li>
                                <a class="dropdown-item profile-menu text-center" href="#">Change Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item profile-menu text-center" href="#">Privacy & Policy</a>
                            </li>
                            <li>
                                <a class="dropdown-item profile-menu text-center" href="#">Terms & Condition</a>
                            </li>
                            <li>
                                <a class="dropdown-item profile-menu text-center" href="#">Send Feedback</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End of Navbar --}}
</div>
