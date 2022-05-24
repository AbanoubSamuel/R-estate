<?php
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProperityController;

// Route::resource('stack',StakeController::class);

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
Route::get('/register', 'RegistrationController@create');

// Route::get('/login', 'RegistratioCController','create');
//Route::post('register', 'RegistrationController@store');
// Login and Regist routes


Route::resource('registerAdvertiser', AdvertiserController::class);



         Route::get('registerAdvertiser', function () {
             return view('registationprof');
         });


Auth::routes();


Route::group(['middleware' => ['auth']], function () {

Route::get('rprofile', function () {
    return view('profile.profile')->name('profiler');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




    Route::resource('add', AdvertiserController::class);

    Route::get('advertiser', [AdminController::class,'showuser'])->name('advertiser');

    Route::delete('destroy/{id}', [AdminController::class,'destroyl'])->name('destroy');

    Route::delete('admin/{id}', [AdminController::class,'delete'])->name('delete');
    
    Route::get('result', [ProperityController::class,'display']);

    Route::get('advertiser', [AdminController::class,'showuser'])->name('advertiser');

    Route::delete('destroy/{id}', [AdminController::class,'destroyl'])->name('destroy');

    Route::delete('admin/{id}', [AdminController::class,'delete'])->name('delete');
    
    Route::get('result', [ProperityController::class,'display']);

    Route::resource('properities', ProperityController::class);



    Route::put('statu/{status}', [ProperityController::class,'status'])->name('status');
    Route::put('status/{status}', [ProperityController::class,'statu'])->name('statu');

    Route::get('usersTable', [AdminController::class,'index']);

    Route::delete('deluser/{id}', [AdminController::class,'deluser'])->name('deluser');


    Route::get('user', function () {
        return view('sidebar.users');
    });



    Route::get('sider', function () {
        return view('sidebar.sidebar');
    });

    Route::get('home', function () {
        return view('myHome');
    });

 



    Route::get('notAuthorised', function () {
        return view('error.error');
    });









         Route::get('profile/{data}', [AdvertiserController::class,'editadvertiver'])->name('profile');

            Route::PUT('updateprofile/{data}', [AdminController::class,'updateprofile'])->name('updateprofile');

         Route::get('profiler', function () {
             return view('profile.profile');
         });


        });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


