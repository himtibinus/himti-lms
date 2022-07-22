<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Calendar | HIMTI</title>
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
        <link rel="stylesheet" href="{{ asset('css/meeting.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"
        />
    </head>

    <body>
        <x-layout>
            {{-- Main --}}
            <main class="d-flex flex-column mt-5 justify-center">
                <table class="container mx-auto d-flex meeting-wrapper">
                    <thead>
                        <tr class="row p-3">
                            <th class="col-2">
                                <div
                                    class="container text-center meeting-title"
                                >
                                    Date
                                </div>
                            </th>
                            <th class="col-2">
                                <div
                                    class="container text-center meeting-title"
                                >
                                    Time
                                </div>
                            </th>

                            <th class="col-4">
                                <div
                                    class="container text-center meeting-title"
                                >
                                    Meeting
                                </div>
                            </th>
                            <th class="col-4">
                                <div
                                    class="container text-center meeting-title"
                                >
                                    Location
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody
                        class="flex flex-col align-items-center list-wrapper"
                    >
                    <x-meeting-list />
                    <x-meeting-list />
                    <x-meeting-list />
                    <x-meeting-list />
                    <x-meeting-list />

                    </tbody>
                    <tbody class="d-flex justify-content-center">
                        <tr>
                            <td
                                class="container d-flex justify-content-center mx-auto align-content-center col-12 p-2"
                                style="width: 100%;"
                            >
                                <nav
                                    aria-label="Page navigation example"
                                >
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a
                                                class="page-link"
                                                href="#"
                                                aria-label="Previous"
                                            >
                                                <span aria-hidden="true"
                                                    >&laquo;</span
                                                >
                                                <span class="sr-only"
                                                    >Previous</span
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
                                                <span class="sr-only"
                                                    >Next</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </x-layout>

        <script
            language="JavaScript"
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
