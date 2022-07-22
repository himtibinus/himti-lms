<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>View Photo | HIMTI</title>
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
        <link rel="stylesheet" href="{{ asset('css/photo.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <x-layout>
            {{-- Main --}}
            <main
                class="d-flex flex-column align-items-center justify-content-center"
            >
                <div class="container wrapper overflow-auto p-3">
                    {{-- Data 1 --}}
                    <div class="date-container m-3">
                        <span class="date"> Mon, 23 May 2022 </span>
                    </div>
                    <div
                        class="photo-container d-flex flex-row flex-wrap justify-content-start align-items-center"
                    >
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="180px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                    </div>
                    {{-- Data 2 --}}
                    <div class="date-container m-3">
                        <span class="date"> Wed, 25 May 2022 </span>
                    </div>
                    <div
                        class="photo-container d-flex flex-row flex-wrap justify-content-start align-items-center"
                    >
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="180px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="180px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                    </div>
                    {{-- Data 3 --}}
                    <div class="date-container m-3">
                        <span class="date"> Thu, 26 May 2022 </span>
                    </div>
                    <div
                        class="photo-container d-flex flex-row flex-wrap justify-content-start align-items-center"
                    >
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="180px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="180px"
                            height="180px"
                            alt="photo"
                        />
                        <img
                            src="{{ asset('images/Malang.png') }}"
                            class="m-3"
                            width="320px"
                            height="180px"
                            alt="photo"
                        />
                    </div>
                </div>
            </main>
            {{-- End of Main --}}
        </x-layout>

        {{-- Footer --}}
        <footer class="d-flex justify-content-end p-3">
            <span>© 2022 HIMTI BINUS University</span>
        </footer>
        {{-- End of Footer --}}
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
