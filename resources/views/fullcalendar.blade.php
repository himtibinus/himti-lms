@extends('layouts.app')
@section('Title')
    Calendar
@endsection
@section('scripts')
    <title>Calendar | HIMTI</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css" />
@endsection

@section('content')
    {{-- Main --}}
    <main class="d-flex flex-column align-items-center justify-content-center">
        <div class="container">
            <div id="calendar"></div>
        </div>
    </main>
    {{-- End of Main --}}
@endsection


@section('js-script')
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/js/evo-calendar.min.js"
        integrity="sha256-zA9dW14ifsuPUjWoaoDxDFGgsqK1YGqzf3ts+FK5924=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#calendar").evoCalendar({});
        });
    </script>
@endsection
