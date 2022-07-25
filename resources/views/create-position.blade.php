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
    {{-- Main --}}
    <main class="d-flex flex-column align-items-center justify-content-center">
        <div class="container wrapper overflow-auto px-3 py-5 d-flex flex-column justify-content-between">
            <div class="body-create-postion">
                <div class="header-create-position row d-flex my-3">
                    <div class="col-md-1 px-3 d-flex justify-content-md-center justify-content-start">
                        <a href="/admin-panel" style="color: black"><i class="bi bi-arrow-left mx-3"
                                style="font-size: 30px"></i></a>
                    </div>
                    <div class="col-md-11 px-3">
                        <span class="d-flex align-items-center" style="font-size: 30px">Create New Position</span>
                    </div>
                </div>
                <div class="input-container input-group row my-5 mx-3">
                    <div class="col-md-2">
                        <h5>Position Name :</h5>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" style="height: 200px" aria-label="With textarea"></textarea>
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
    </main>
@endsection
