@extends('layouts.app')

@section('Title')
    Calendar
@endsection

@section('scripts')
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
@endsection

@section('content')
    <x-ContainerBox>
        <x-slot name="content">
            <div class="container add-meet-wrapper">
                <div class="container py-3 px-5 add-meet-title">
                    <span class="button-icon inline-flex"><i class="bi bi-arrow-left"></i></span> Schedule a Meeting
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <form action="">
                            <div class="input-wrapper">
                                <label for="">Name: </label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="input-wrapper">
                                <label for="">Start: </label>
                                <input type="date" name="" id="" style="width: 75%">
                                <input type="time" style="width: 25%">
                            </div>
                            <div class="input-wrapper">
                                <label for="">Schedule For: </label>
                                <input type="text">
                            </div>
                            <div class="input-wrapper">
                                <label for="">Location: </label>
                                <textarea></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="col-4 d-none d-lg-block">
                        <img src="{{ asset('images/add-calendar.png') }}" class="image-fluid" alt="add-calendar" />
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row justify-content-end ">

                    <div class="button-container-danger d-flex justify-content-end mx-5 my-3 ">
                        <button type="button" class="btn btn-danger d-inline-flex p-0">
                            <span class="button-text d-inline-flex justify-content-center align-items-center">Delete</span>
                            <span class="button-icon d-inline-flex justify-content-center align-items-center"><i
                                    class="bi bi-arrow-right-circle"></i></span>
                        </button>
                    </div>
                    <div class="button-container d-flex justify-content-end mx-5 my-3 ">
                        <button type="button" class="btn btn-primary d-inline-flex p-0">
                            <span class="button-text d-inline-flex justify-content-center align-items-center">Create</span>
                            <span class="button-icon d-inline-flex justify-content-center align-items-center"><i
                                    class="bi bi-arrow-right-circle"></i></span>
                        </button>
                    </div>
                </div>

            </div>
        </x-slot>
    </x-ContainerBox>
@endsection
