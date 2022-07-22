<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("index");
});

Route::get("/photo", function () {
    return view("photo");
});

Route::get("/calendar", function () {
    return view("fullcalendar");
});

Route::get("/calendar/add-event", function () {
    return view("add-meeting");
});

Route::get("/calendar/edit-event", function () {
    return view("edit-meeting");
});

Route::get("/meeting", function () {
    
    return view("meeting");
});

Route::get("/manage", function(){
    return view("member");
});


Route::get("/admin-panel", function () {
    return view("admin-panel");
});

Route::get("/create-position", function () {
    return view("create-position");
});

Route::get("/create-roles", function () {
    return view("create-roles");
});
