<?php

use App\Livewire\Servicedetailpage;
use App\Livewire\ShowHome;
use App\Livewire\ShowservicesPage;
use App\Livewire\Showteams;
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
//     return view('welcome');
// });

Route::get("/", ShowHome::class)->name("home");
Route::get("Services", ShowservicesPage::class)->name("services");
Route::get("Service-detail/{id}", Servicedetailpage::class)->name('Service-detail');
Route::get('team', Showteams::class)->name('team');
