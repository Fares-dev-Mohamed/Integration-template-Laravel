<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MyController;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});

Route::resource('projects', ProjectController::class);


//export import exel

Route::get('exel', [MyController::class, 'exel'])->middleware(['auth'])->name('exel');
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

//send Mail

Route::get('send-mail', function () {

    $details = [
            'title' => 'Mail from mohamed',
            'body' => 'This is for testing email using laravel'
        ];

    Mail::to(Config::get('mail.from.address'))->send(new MyTestMail($details));

    dd("Email is Sent.");
});

Route::get('/dashboard' , function(){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');;
Route::get('/dashboard1', function () {
    return view('dashboard1');
})->middleware(['auth'])->name('dashboard1');;
Route::get('/dashboard2', function () {
    return view('dashboard2');
})->middleware(['auth'])->name('dashboard2');;
Route::get('/general_elements', function () {
    return view('general_elements');
})->middleware(['auth'])->name('general_elements');;
Route::get('/form', function () {
    return view('form');
})->middleware(['auth'])->name('form');;
Route::get('/form_advanced', function () {
    return view('form_advanced');
})->middleware(['auth'])->name('form_advanced');;
Route::get('/form_validation', function () {
    return view('form_validation');
})->middleware(['auth'])->name('form_validation');;
Route::get('/form_wizards', function () {
    return view('form_wizards');
})->middleware(['auth'])->name('form_wizards');;

Route::get('/form_buttons', function () {
    return view('form_buttons');
})->middleware(['auth'])->name('form_buttons');;
Route::get('/media_gallery', function () {
    return view('media_gallery');
})->middleware(['auth'])->name('media_gallery');;
Route::get('/typography', function () {
    return view('typography');
})->middleware(['auth'])->name('typography');;
Route::get('/icons', function () {
    return view('icons');
})->middleware(['auth'])->name('icons');;
Route::get('/glyphicons', function () {
    return view('glyphicons');
})->middleware(['auth'])->name('glyphicons');;
Route::get('/widgets', function () {
    return view('widgets');
})->middleware(['auth'])->name('widgets');;
Route::get('/invoice', function () {
    return view('invoice');
})->middleware(['auth'])->name('invoice');;
Route::get('/inbox', function () {
    return view('inbox');
})->middleware(['auth'])->name('inbox');;
Route::get('/tables', function () {
    return view('tables');
})->middleware(['auth'])->name('tables');;
Route::get('/tables_dynamic', function () {
    return view('tables_dynamic');
})->middleware(['auth'])->name('tables_dynamic');;
Route::get('/chartjs', function () {
    return view('chartjs');
})->middleware(['auth'])->name('chartjs');;
Route::get('/chartjs2', function () {
    return view('chartjs2');
})->middleware(['auth'])->name('chartjs2');;
Route::get('/morisjs', function () {
    return view('morisjs');
})->middleware(['auth'])->name('morisjs');;
Route::get('/echarts', function () {
    return view('echarts');
})->middleware(['auth'])->name('echarts');;
Route::get('/other_charts', function () {
    return view('other_charts');
})->middleware(['auth'])->name('other_charts');;
Route::get('/fixed_sidebar', function () {
    return view('fixed_sidebar');
})->middleware(['auth'])->name('fixed_sidebar');;
Route::get('/fixed_footer', function () {
    return view('fixed_footer');
})->middleware(['auth'])->name('fixed_footer');;
Route::get('/e_commerce', function () {
    return view('e_commerce');
})->middleware(['auth'])->name('e_commerce');;
Route::get('/projects', function () {
    return view('projects');
})->middleware(['auth'])->name('projects');;
Route::get('/project_detail', function () {
    return view('project_detail');
})->middleware(['auth'])->name('project_detail');;
Route::get('/contacts', function () {
    return view('contacts');
})->middleware(['auth'])->name('contacts');;
Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');;
Route::get('/plain_page', function () {
    return view('plain_page');
})->middleware(['auth'])->name('plain_page');;
Route::get('/pricing_tables', function () {
    return view('pricing_tables');
})->middleware(['auth'])->name('pricing_tables');;
Route::get('/loginform', function () {
    return view('loginform');
})->middleware(['auth'])->name('loginform');;
Route::get('/page_403', function () {
    return view('page_403');
})->middleware(['auth'])->name('page_403');;
Route::get('/page_404', function () {
    return view('page_404');
})->middleware(['auth'])->name('page_404');;
Route::get('/page_500', function () {
    return view('page_500');
})->middleware(['auth'])->name('page_500');;


Route::get('file_upload', [FileUploadController::class, 'fileUpload'])->middleware(['auth'])->name('file.upload');
Route::post('file_upload', [FileUploadController::class, 'fileUploadPost'])->middleware(['auth'])->name('file.upload.post');

require __DIR__.'/auth.php';
