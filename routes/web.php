<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAccueil;
use App\Http\Controllers\ControllerPresentation;
use App\Http\Controllers\ControllerAbout;
use App\Http\Controllers\ControllerLang;

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

Route::get('/', [ControllerAccueil::class, 'accueil']);

Route::get('/presentation', [ControllerPresentation::class, 'presentation']);

Route::get('/about', [ControllerAbout::class, 'about']);

Route::get('/lang', [ControllerLang::class, 'lang']);

/* // Route::get('/presentation', function () {
//     return view('presentation', [
//         'title' => 'Paul l\'alien',
//         'date' => new DateTime(),
//     ]);
// });
 */