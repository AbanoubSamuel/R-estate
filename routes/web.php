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


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('add', AdvertiserController::class);


Route::resource('registerAdvertiser', AdvertiserController::class);


Route::get('advertiser', [AdminController::class,'showuser'])->name('advertiser');

Route::delete('destroy/{id}',[AdminController::class,'destroyl'])->name('destroy');

    Route::delete('admin/{id}',[AdminController::class,'delete'])->name('delete');;
    

        Route::get('result', [ProperityController::class,'display']);


          Route::resource('properities', ProperityController::class);


         Route::get('registerAdvertiser', function () {
             return view('registationprof');
         });


     Route::get('home', function () {
         return view('myHome');
     });


     Route::get('show', [ProperityController::class,'show']);

    // Route::get('show', function () {
    //     return view('show.show');






    Route::put('statu/{status}',[ProperityController::class,'status'])->name('status');
  Route::put('status/{status}',[ProperityController::class,'statu'])->name('statu');
    // });

   Route::get('sider', function () {
       return view('sidebar.sidebar');
   });
   
   
   Route::get('user', function () {
       return view('sidebar.users');
   });


  Route::get('notAuthorised', function () {
      return view('error.error');
  });

//   Route::get('users-table', function () {
//       return view('usersDash.usersDash');
//   });


Route::get('usersTable', [AdminController::class,'index']);

//Route::delete('Delete{id}', [AdminController::class,'delete']);

Route::delete('deluser/{id}', [AdminController::class,'deluser'])->name('deluser');


//Route::get('showuser', [AdminController::class,'showuser']);



// Route::get('results',function(){
//     return view('results');
// });


// Route::get('dashboard',function(){
//     return view('Properity.Feed');
// });


//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




// Route::get('login',function(){
//     return view('auth.login');
// });
