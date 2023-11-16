<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::post('story', [HomeController::class, 'story'])->name('home.story');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');

Route::get('add_order', [HomeController::class, 'order'])->name('add_order');
// Route::get('contacts', function () {
//     return view('home.contact');
// });
Route::get('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {

    Route::get('admin', function () {
        return view('index');
    });


    Route::resource('section', SectionController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('order', OrderController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('admin', AdminController::class);

    Route::get('archive', [OrderController::class, 'archive'])->name('order.archive');
});






require __DIR__ . '/auth.php';
