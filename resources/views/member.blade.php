<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Manage Member | HIMTI</title>
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
        <link rel="stylesheet" href="{{ asset('css/member.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <x-layout>
            {{-- Main --}}
            <main
                class="d-flex flex-column align-items-center justify-content-center"
            >
                <div class="container wrapper p-3 d-flex flex-column">
                    <div class="header row mx-5 mt-4">
                        <div class="input-group my-3">
                            <button
                                class="btn btn-outline-secondary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Separated link</a
                                    >
                                </li>
                            </ul>
                            {{--
                            <select
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            --}}
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                                aria-label="Search"
                                aria-describedby="button-addon2"
                            />
                            <button
                                class="btn btn-outline-secondary"
                                type="button"
                                id="button-addon2"
                            >
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                        {{--
                        <div class="col-sm-2 p-0">
                            <select
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-sm-10 p-0">
                            <div class="input-group mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Recipient's username"
                                    aria-label="Recipient's username"
                                    aria-describedby="button-addon2"
                                />
                                <button
                                    class="btn btn-outline-secondary"
                                    type="button"
                                    id="button-addon2"
                                >
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        --}}
                    </div>
                    <div class="table-wrapper table-responsive m-3">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Region</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Commision</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Data 1 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 2 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 3 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 4 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 5 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 6 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 7 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 8 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 9 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                {{-- Data 10 --}}
                                <tr>
                                    <th>
                                        <img
                                            src="{{
                                                asset('images/profile-pic.png')
                                            }}"
                                            class="image-fluid"
                                            width="50px"
                                            height="50px"
                                            alt="Profile Picture"
                                        />
                                    </th>
                                    <td>Bryan Williams</td>
                                    <td>2401960845</td>
                                    <td>Kemanggisan</td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Position</option>
                                            <option value="1">Chairman</option>
                                            <option value="2">
                                                President of Alam Sutera
                                            </option>
                                            <option value="3">
                                                President of Kemanggisan
                                            </option>
                                            <option value="4">
                                                President of Bandung
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Roles</option>
                                            <option value="1">Admin</option>
                                            <option value="2">DPI</option>
                                            <option value="3">
                                                General Manager
                                            </option>
                                            <option value="4">DPI Event</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Commision</option>
                                            <option value="1">
                                                Commision 1
                                            </option>
                                            <option value="2">
                                                Commision 2
                                            </option>
                                            <option value="3">
                                                Commision 3
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
