<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Admin & DPI Panel | HIMTI</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <x-layout>
            {{-- Main --}}
            <main
                class="d-flex flex-column align-items-center justify-content-center"
            >
                <div class="wrapper overflow-auto row">
                    <div
                        class="position-wrapper col-lg-6 d-flex align-items-center h-100"
                    >
                        <div class="container position-container">
                            <div
                                class="container header-position d-flex justify-content-center mb-1"
                            >
                                <a href="/create-position"
                                    ><button
                                        type="button"
                                        class="btn btn-light"
                                    >
                                        Create New Position
                                    </button></a
                                >
                            </div>
                            <div
                                class="container body-position d-flex flex-column justify-content-center align-items-center"
                            >
                                <div class="header-body text-center py-3">
                                    <h4>Position</h4>
                                </div>
                                <div class="list-body w-50">
                                    {{-- Data 1 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>Chairman</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 2 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>Chairman 2</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 3 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span
                                                >President of Alam Sutera</span
                                            >
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 4 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>President of Senayan</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 5 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>President of Senayan</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 6 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>President of Bandung</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 7 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>President of Malang</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 8 --}}
                                    <div class="position-name row py-2">
                                        <div class="col-lg-8 col-md-6">
                                            <span>Chairman</span>
                                        </div>
                                        <div
                                            class="col-lg-4 col-md-6 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container footer-position mt-5">
                                <nav aria-label="Page navigation example">
                                    <ul
                                        class="pagination justify-content-center"
                                    >
                                        <li class="page-item">
                                            <a
                                                class="page-link"
                                                href="#"
                                                aria-label="Previous"
                                            >
                                                <span aria-hidden="true"
                                                    >&laquo;</span
                                                >
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a
                                                class="page-link"
                                                href="#"
                                                aria-label="Next"
                                            >
                                                <span aria-hidden="true"
                                                    >&raquo;</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div
                        class="roles-wrapper col-lg-6 d-flex align-items-center h-100"
                    >
                        <div class="container roles-container">
                            <div
                                class="container header-roles d-flex justify-content-center mb-1"
                            >
                                <a href="/create-roles"
                                    ><button
                                        type="button"
                                        class="btn btn-light"
                                    >
                                        Create New Roles
                                    </button></a
                                >
                            </div>
                            <div
                                class="container body-position d-flex flex-column justify-content-center align-items-center"
                            >
                                <div class="header-body text-center py-3">
                                    <h4>Roles</h4>
                                </div>
                                <div class="list-body w-50">
                                    {{-- Data 1 --}}
                                    <div class="roles-name row py-2">
                                        <div class="col-md-8">
                                            <span>Admin</span>
                                        </div>
                                        <div
                                            class="col-md-4 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 2 --}}
                                    <div class="roles-name row py-2">
                                        <div class="col-md-8">
                                            <span>DPI</span>
                                        </div>
                                        <div
                                            class="col-md-4 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 3 --}}
                                    <div class="roles-name row py-2">
                                        <div class="col-md-8">
                                            <span>General Manager</span>
                                        </div>
                                        <div
                                            class="col-md-4 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 4 --}}
                                    <div class="roles-name row py-2">
                                        <div class="col-md-8">
                                            <span>DPI Event</span>
                                        </div>
                                        <div
                                            class="col-md-4 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                    {{-- Data 5 --}}
                                    <div class="roles-name row py-2">
                                        <div class="col-md-8">
                                            <span>Activist</span>
                                        </div>
                                        <div
                                            class="col-md-4 d-flex justify-content-end"
                                        >
                                            <a href=""
                                                ><i
                                                    class="bi bi-pencil-fill mx-1"
                                                ></i
                                            ></a>
                                            <a href=""
                                                ><i
                                                    class="bi bi-trash-fill mx-1"
                                                ></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            {{-- End of Main --}}
        </x-layout>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
