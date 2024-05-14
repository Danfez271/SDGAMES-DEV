<?php
use App\Livewire\LandingPage;
use App\Livewire\GtavPage;
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

Route::get('/',  LandingPage::class)->name('landing');
Route::get('/gtav',         GtavPage::class)->name('gtav');

