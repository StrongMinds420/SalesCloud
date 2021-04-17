<?php


use App\Http\Controllers\Auth\RegisterUserController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginUserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboards\DashboardController;
use App\Http\Controllers\Dashboards\SuperAdminController;
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
    return view('auth/login');
});








/* Register Routes */
Route::get('/register', [RegisterUserController::class,'create'])
			->middleware('auth');

				

Route::post('/registeruser', [RegisterUserController::class,'store'])
				->middleware('guest')
				->name('register');

Route::get('/dashboard', function(){
	return view('home');
})->middleware('auth')->name('home');


/*Login Session*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Logout Session
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


//Dashboards/components
Route::get('/dashboard2', [App\Http\Controllers\Dashboards\DashboardController::class, 'dashboard'])->name('home');

Route::get('/widgets', [App\Http\Controllers\Dashboards\DashboardController::class, 'widgets'])->name('home');

Route::get('/top', [App\Http\Controllers\Dashboards\DashboardController::class, 'topnav'])->name('home');

Route::get('/topside', [App\Http\Controllers\Dashboards\DashboardController::class, 'topside'])->name('home');

Route::get('/boxed', [App\Http\Controllers\Dashboards\DashboardController::class, 'boxed'])->name('home');

Route::get('/fixedside', [App\Http\Controllers\Dashboards\DashboardController::class, 'fixedside'])->name('home');

Route::get('/fixednav', [App\Http\Controllers\Dashboards\DashboardController::class, 'fixednav'])->name('home');

Route::get('/chartjs', [App\Http\Controllers\Dashboards\DashboardController::class, 'chartjs'])->name('home');

Route::get('/flot', [App\Http\Controllers\Dashboards\DashboardController::class, 'flot'])->name('home');

Route::get('/inline', [App\Http\Controllers\Dashboards\DashboardController::class, 'inline'])->name('home');

Route::get('/uplot', [App\Http\Controllers\Dashboards\DashboardController::class, 'uplot'])->name('home');

Route::get('/general', [App\Http\Controllers\Dashboards\DashboardController::class, 'general'])->name('home');

Route::get('/icon', [App\Http\Controllers\Dashboards\DashboardController::class, 'icon'])->name('home');

Route::get('/buttons', [App\Http\Controllers\Dashboards\DashboardController::class, 'buttons'])->name('home');

Route::get('/sliders', [App\Http\Controllers\Dashboards\DashboardController::class, 'sliders'])->name('home');

//SuperAdmin Routes;

Route::get('/profile', [App\Http\Controllers\Dashboards\SuperAdminController::class, 'profile'])->name('home');