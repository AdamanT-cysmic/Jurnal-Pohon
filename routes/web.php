<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ManageUser;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jurnal', function () {
    return view('jurnal');
});

Route::get('/komentar', function () {
    return view('komentar');
});

Route::get('/detailjurnal', function () {
    return view('detailjurnal');
});



Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');


     Route::get('/manage-user', ManageUser::class)->name('manage-user'); //Tambahkan routing ini

    // Route::get('/managemenuser', Managemenuser::class)->name('managemenuser');

    // Route::get('/upload', 'UploadController@upload')->name('upload');
    // Route::post('/upload/proses', 'UploadController@proses_upload');
});
