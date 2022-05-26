<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\MovieUploadController;
use App\Http\Controllers\PaymentController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [UnivController::class, ('index')])->name('Home');
Route::get('genre', [UnivController::class, ('genre')])->name('Genre');
Route::get('new-release', [UnivController::class, ('newReleases')])->name('newReleases');
Route::get('movie-descr/id={movieDescr}', [MovieUploadController::class, ('getDescr')])->name('Descr');
Route::post('movie-descr/id={movieDescr}', [MovieUploadController::class, ('getDescr')])->name('Descr');
Route::resource('admin', MovieUploadController::class);
//Route::get('action', [UnivController::class, ('action')])->name('Action');
//UniversalController Group Routes
Route::controller(UnivController::class)->group(function ()
{
    Route::get('action', 'action')->name('Action');
    Route::get('scifi', 'scifi')->name('Scifi');
    Route::get('family', 'family')->name('Family');
    Route::get('drama', 'drama')->name('Drama');
    Route::get('kungfu', 'kingfu')->name('Kungfu');
    Route::get('series', 'series')->name('Series');
    Route::get('romance', 'romance')->name('Romance');
    Route::get('comedy', 'comedy')->name('Comedy');
    Route::get('horror', 'horror')->name('Horror');
    Route::get('thriller', 'thriller')->name('Thriller');
    Route::get('details/id={id}', 'getDetails')->name('getDetails');
    Route::post('details', 'pay')->name('savePay');
    //Route::get('success', 'paystackPay')->name('paystackPay');
});
// Paystack Payment Route
Route::post('/pay', [PaymentController::class, 'inlinePay'])->name('inlinePay');
Route::get('/pay', [PaymentController::class, 'inlinePay'])->name('inlinePay');

Route::get('/dashboard', function () {
    return view('admin/admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
