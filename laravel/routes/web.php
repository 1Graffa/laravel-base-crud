<?php

use Illuminate\Support\Facades\Route;
use App\BeerController;

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
})->name('home');

Route::get('/contatti','BeerController@contatti')->name('contatti');

Route::resource('birre', 'BeerController');
// questo è importantissimo, ti tiene in piedi il sistema collegato al db min 60' video 81.1