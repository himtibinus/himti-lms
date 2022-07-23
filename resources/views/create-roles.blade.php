@extends('layouts.app')

@section('Title')
    Admin Panel
@endsection

@section('scripts')
    <title>Create Position | HIMTI</title>

    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@endsection


@section('content')
    <x-ContainerBox>
        <x-slot name="content">
            <div class="container wrapper overflow-auto px-3 py-5 d-flex flex-column justify-content-between">
                <div class="body-create-roles">
                    <div class="header-create-roles row d-flex my-3">
                        <div class="col-md-1 px-3 d-flex justify-content-md-center justify-content-start">
                            <a href="/admin-panel" style="color: black"><i class="bi bi-arrow-left mx-3"
                                    style="font-size: 30px"></i></a>
                        </div>
                        <div class="col-md-11 px-3">
                            <span class="d-flex align-items-center" style="font-size: 30px">Create New Roles</span>
                        </div>
                    </div>
                    <div class="input-container input-group row my-5 mx-3">
                        <div class="col-md-2">
                            <h5>Roles Name :</h5>
                        </div>
                        <div class="col-md-7">
                            <textarea class="form-control" style="height: 80px" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="acces-container d-flex my-5 mx-3">
                        <div class="acces-text px-3">
                            <h5>
                                Accesibility<span style="color: white">_</span>:
                            </h5>
                        </div>
                        <div class="acces-list px-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="CheckDasboard" />
                                    <label class="form-check-label" for="CheckDashboard">
                                        Dashboard
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="CheckCalendar" />
                                    <label class="form-check-label" for="CheckCalendar">
                                        Calendar
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="CheckMeetingSchedule" />
                                    <label class="form-check-label" for="CheckMeetingSchedule">
                                        Meeting Schedule
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="CheckManageSchedule" />
                                    <label class="form-check-label" for="CheckManageSchedule">
                                        Manage Schedule
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="CheckManageMember" />
                                    <label class="form-check-label" for="CheckManageMember">
                                        Manage Member
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="CheckViewPhoto" />
                                    <label class="form-check-label" for="CheckViewPhoto">
                                        View Photo
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="CheckAdminPanel" />
                                    <label class="form-check-label" for="CheckAdminPanel">
                                        Admin & DPI Panel
                                    </label>
                                </div>
                                <div class="col-xl-3 col-md-4 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="CheckSettings" />
                                    <label class="form-check-label" for="CheckSettings">
                                        Settings
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-container d-flex justify-content-end mx-5 my-3">
                    <button type="button" class="btn btn-primary d-inline-flex p-0">
                        <span class="button-text d-inline-flex justify-content-center align-items-center">Create</span>
                        <span class="button-icon d-inline-flex justify-content-center align-items-center"><i
                                class="bi bi-arrow-right-circle"></i></span>
                    </button>
                </div>
            </div>
        </x-slot>
    </x-ContainerBox>
@endsection
