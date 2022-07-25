@extends('layouts.app')

@section('scripts')
    <title>Dashboard | HIMTI</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection


@section('content')
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
                                    <img src="{{ asset('images/dot-event-regional.png') }}" class="me-2" width="10px"
                                        height="10px" alt="dot-event-regional">
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
                                    <img src="{{ asset('images/dot-meeting-event.png') }}" class="me-2" width="10px"
                                        height="10px" alt="dot-meeting-event">
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
                                    <img src="{{ asset('images/dot-meeting-division.png') }}" class="me-2" width="10px"
                                        height="10px" alt="dot-meeting-division">
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
                            <li class="my-2"><img src="{{ asset('images/dot-event-regional.png') }}" class="me-2"
                                    width="10px" height="10px" alt="dot-event-regional">Event Regional</li>
                            <li class="my-2"><img src="{{ asset('images/dot-event-all-region.png') }}" class="me-2"
                                    width="10px" height="10px" alt="dot-event-all-region">Event
                                All Region</li>
                            <li class="my-2"><img src="{{ asset('images/dot-meeting-himti.png') }}" class="me-2"
                                    width="10px" height="10px" alt="dot-meeting-himti">Meeting HIMTI</li>
                            <li class="my-2"><img src="{{ asset('images/dot-meeting-event.png') }}" class="me-2"
                                    width="10px" height="10px" alt="dot-meeting-event">Meeting Event</li>
                            <li class="my-2"><img src="{{ asset('images/dot-meeting-division.png') }}" class="me-2"
                                    width="10px" height="10px" alt="dot-meeting-division">Meeting
                                Division</li>
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
@endsection
