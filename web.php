<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CarController;
use App\Http\Controllers\backend\AddcarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\LiceControlle;
use App\Http\Controllers\ContactController;
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

Route::get('xxx', function () {
   return view('backend.new111');
});


Route::get('user-rol',[Controller::class,'rol'])->name('userdestroy');




//Route::get('car', function () { 
 //   return view('backend.cars');
//});
Route::group(['prefix'=>'admin','namespace'=>'Controllers'],function()
{
  Route::get('admin_dashboard',[Controller::class,'admindash'])->name('admin.dash');
//سيارات
  Route::get('add-car',[CarController::class,'adcars'])->name('caradd');
  Route::Post('cars/store',[Controller::class,'store'])->name('car.store');
  Route::get('car-edit/{id}',[Controller::class,'edit'])->name('carsedit');
  Route::Post('car-update/{id}',[Controller::class,'update'])->name('carsupdate');
  Route::get('car-delete/{id}',[Controller::class,'destroy'])->name('cardestroy');
  Route::get('create-pdf', [Controller::class, 'exportPDF'])->name('pdfcreate');
  Route::get('generate-docx', [Controller::class,'generateDocx'])->name('doccreate');

//عقود ايجار
Route::Post('add_lic/store1',[LiceControlle::class,'store1'])->middleware('CheckPrice')->name('lic.store');
  Route::get('lices-edit/{id}',[LiceControlle::class,'edit'])->name('licedit');
  Route::Post('lices-update/{id}',[LiceControlle::class,'update'])->name('licupdate');
  Route::get('manage-lic',[LiceControlle::class,'show'])->name('seelic');
  Route::get('delete-lice/{id}',[LiceControlle::class,'destroylic'])->name('deletelic');
//users
  Route::get('manage-cars',[Controller::class,'tbltest'])->name('seecars');
  Route::get('manage-users',[Controller::class,'usertbl'])->name('seeusers');
  Route::get('users-edit/{id}',[Controller::class,'usersedit'])->name('usersedit');
  Route::Post('car-update/{id}',[Controller::class,'usersupdate'])->name('usersupdate');
  Route::get('user-delete/{id}',[Controller::class,'userdestroy'])->name('userdestroy');
//العروض
Route::Post('add_offer/store',[ContactController::class,'store'])->name('offer.store');
Route::get('manage-offer',[ContactController::class,'show'])->name('seeoffer');
Route::get('offer-edit/{id}',[ContactController::class,'edit'])->name('offeredit');
Route::Post('offer-update/{id}',[ContactController::class,'update'])->name('offerupdate');
Route::get('offer-delete/{id}',[ContactController::class,'destroy'])->name('offerdestroy');
Route::get('add-offers',[ContactController::class,'index'])->name('addoffers');
});


 
Route::get('main1',[CarController::class,'index'])->name('carbook');


Route::get('main7',[CarController::class,'test']);
Route::get('main9',[CarController::class,'test9']);
//Route::namespace('backend')->group(function(){


    //Route::namespace('Auth')->group(function () {
       // Route::get('/login',[Controller::class,'show_login_form'])->name('login');
       // Route::post('/login',[Controller::class,'process_login'])->name('login');
       // Route::get('/register',[Controller::class,'show_signup_form'])->name('register');
       // Route::post('/register',[Controller::class,'process_signup']);
        //Route::post('/logout',[Controller::class,'logout'])->name('logout');
      //});

    
    Route::get('/',[Controller::class,'indexlog'])->name('loguser');
   Route::get('reg',[Controller::class,'indexreg'])->name('reguser');
    Route::get('admin',[Controller::class,'indexadmin'])->name('admin');

    
    
    Route::get('users99', [Controller::class, 'datatable1'])->name('users.index');
   
   
   
    Route::get('showall',[Controller::class,'index'])->name('allshow');

    
    
    Route::get('home',[Controller::class,'indexmain'])->name('allcars');
    Route::get('add_car',[Controller::class,'create']);
    
    Route::get('lices',[CarController::class,'test9'])->name('all.lices');
//});
//Route::Post('administrator/userAuthentication', [Controller::class,'userAuthentication'])->name('xxv');
Route::get('exiteuser',[Controller::class,'exite1'])->name('exite.user');
//Route::Post('add_user/store',[Controller::class,'storeuser'])->name('user.store');

Route::get('add_car1',[LiceControlle::class,'create']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');






  

