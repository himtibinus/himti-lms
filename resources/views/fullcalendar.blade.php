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
        <link rel="stylesheet" href="{{ asset('css/calendar.css') }}" />
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
            <main
                class="d-flex flex-column align-items-center justify-content-center"
            >
                <div class="container">
                    <div id="calendar"></div>
                </div>
            </main>
            {{-- End of Main --}}
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
        <script
            src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/js/evo-calendar.min.js"
            integrity="sha256-zA9dW14ifsuPUjWoaoDxDFGgsqK1YGqzf3ts+FK5924="
            crossorigin="anonymous"
        ></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#calendar").evoCalendar({});
            });
        </script>
    </body>
</html>
