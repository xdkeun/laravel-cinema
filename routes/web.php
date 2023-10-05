<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScreentimeController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketingController;
use App\Http\Controllers\UsermovieController;
use App\Http\Controllers\UserproductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UsereventController;
use App\Http\Controllers\UsernewsController;
use App\Http\Controllers\UserloginController;
use App\Http\Controllers\UsersignupController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PayafterController;

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

// Route::get('/', UsermovieController::class
// );


Route::get( '/', [UsermovieController::class, 'index'] );

Route::get( '/userproduct', [UserproductController::class, 'index'] );

Route::get( '/usernews', [UsernewsController::class, 'index'] );

Route::get( '/userevent', [UsereventController::class, 'index'] );

Route::get( '/userlogin', [UserloginController::class, 'index'] );

Route::get( '/usersignup', [UsersignupController::class, 'index'] );

Route::get('/adm1n', function () {
    return view('admin/main');
});




Route::get( 'member', [MemberController::class, 'index'] );
Route::resource( 'member', MemberController::class );
Route::resource( 'screentime', ScreentimeController::class );
Route::resource( 'seat', SeatController::class );
Route::resource( 'cinema', CinemaController::class );
Route::resource( 'genre', GenreController::class );
Route::resource( 'director', DirectorController::class );
Route::resource( 'ticketing', TicketingController::class );
Route::get( 'product', [ProductController::class, 'index'] );
Route::resource( 'product', ProductController::class );
Route::post('login/check', [LoginController::class, 'check'] );
Route::get('login/logout', [LoginController::class, 'logout'] );
Route::get( 'movie', [MovieController::class, 'index'] );
Route::resource( 'movie', MovieController::class );
Route::get( 'usermovie', [UsermovieController::class, 'index'] );
Route::resource( 'usermovie', UsermovieController::class );
Route::get( 'userproduct', [UserproductController::class, 'index'] );
Route::resource( 'userproduct', UserproductController::class );
Route::get( 'news', [NewsController::class, 'index'] );
Route::resource( 'news', NewsController::class );
Route::resource( 'event', EventController::class );
Route::resource( 'event', EventController::class );
Route::get( 'usernews', [UsernewsController::class, 'index'] );
Route::resource( 'usernews', UsernewsController::class );
Route::get( 'userevent', [UsereventController::class, 'index'] );
Route::resource( 'userevent', UsereventController::class );
Route::get( 'userlogin', [UserloginController::class, 'index'] );
Route::resource( 'userlogin', UserloginController::class );
Route::get( 'usersignup', [UsersignupController::class, 'index'] );
Route::resource( 'usersignup', UsersignupController::class );
Route::resource( 'pay', PayController::class );
Route::resource( 'payafter', PayafterController::class );