@extends('layouts.app')
@section('Title')
    Meeting Schedule
@endsection
@section('scripts')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Meeting Schedule | HIMTI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/meeting.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@endsection

@section('content')
    {{-- Main --}}
    <x-ContainerBox>
        <x-slot name="content">
            <table class="container mx-auto d-flex meeting-wrapper wrapper">
                <thead>
                    <tr class="row p-3">
                        <th class="col-2">
                            <div class="container text-center meeting-title">
                                Date
                            </div>
                        </th>
                        <th class="col-2">
                            <div class="container text-center meeting-title">
                                Time
                            </div>
                        </th>

                        <th class="col-4">
                            <div class="container text-center meeting-title">
                                Meeting
                            </div>
                        </th>
                        <th class="col-4">
                            <div class="container text-center meeting-title">
                                Location
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody class="flex flex-col align-items-center list-wrapper">
                    <x-meeting-list />
                    <x-meeting-list />
                    <x-meeting-list />
                    <x-meeting-list />
                    <x-meeting-list />

                </tbody>
                <tbody class="d-flex justify-content-center">
                    <tr>
                        <td class="container d-flex justify-content-center mx-auto align-content-center col-12 p-2"
                            style="width: 100%;">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
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
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    </x-ContainerBox>
@endsection
