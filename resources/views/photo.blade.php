@extends('layouts.app')
@section('Title')
    Photo
@endsection

@section('scripts')
    <title>View Photo | HIMTI</title>
    <link rel="stylesheet" href="{{ asset('css/photo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@endsection


@section('content')
    {{-- Main --}}
    <x-ContainerBox>
        <x-slot name="content">
            <div class="container wrapper overflow-auto p-3">
                {{-- Data 1 --}}
                <div class="date-container m-3">
                    <span class="date"> Mon, 23 May 2022 </span>
                </div>
                <div class="photo-container d-flex flex-row flex-wrap justify-content-start align-items-center">
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="180px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                </div>
                {{-- Data 2 --}}
                <div class="date-container m-3">
                    <span class="date"> Wed, 25 May 2022 </span>
                </div>
                <div class="photo-container d-flex flex-row flex-wrap justify-content-start align-items-center">
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="180px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="180px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                </div>
                {{-- Data 3 --}}
                <div class="date-container m-3">
                    <span class="date"> Thu, 26 May 2022 </span>
                </div>
                <div class="photo-container d-flex flex-row flex-wrap justify-content-start align-items-center">
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="180px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="180px" height="180px"
                        alt="photo" />
                    <img src="{{ asset('images/Malang.png') }}" class="m-3" width="320px" height="180px"
                        alt="photo" />
                </div>
            </div>
        </x-slot>
    </x-ContainerBox>
    {{-- End of Main --}}
@endsection
