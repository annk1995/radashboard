<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Agentcontroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Models\Listing;
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

Route::get('/', function () {
    $listings = Listing::orderBy('id')->get();
    return view('home',compact('listings'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class,'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class,'AdminUpdatePassword'])->name('admin.update.password');
});

Route::get('/admin/listing',[ListingController::class,'index'])->name('admin.listing');
Route::post('/admin/listing/store',[ListingController::class,'store'])->name('admin.listing.store');

Route::middleware(['auth','role:agent'])->group(function(){
Route::get('/agent/dashboard', [Agentcontroller::class,'AgentDashboard'])->name('agent.dashboard');
});
Route::get('/admin/login', [AdminController::class,'AdminLogin'])->name('admin.login');


