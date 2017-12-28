<?php

use App\Http\Controllers\trial3controller;
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


Route::get('/login', 'LoginController@index');
Route::post('/profile', 'LoginController@doLogin');

Route::get('/profile', 'MyController@index');

Route::get('/addclinic', function(){
    return View::make('pages.clinic');
});
Route::get('/', function () {
    return view('welcome');
});


Route::get('/reg1', function () {
     return view('newfile');
    });
//Route::get('/register','trial3controller@create');
//Route::post('/registration','trial3controller@index');
//Route::post('/register','trial3controller@index');
//Route::post('/registered','trial3controller@index');
Route::get('/register','docRegisterController@create');
Route::post('/register','docRegisterController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/assistantregister','AssistantRegisterController@create');
Route::post('/assistantregister','AssistantRegisterController@index');

Route::get('/assistantprofile','AssistantprofileController@index');
Route::put('/assistantprofile','AssistantprofileController@index');

Route::get('/getdoctorprofile','GetdoctorprofileController@showDoctorProfile');
Route::get('/editdoctorprofile','GetdoctorprofileController@editDoctorProfile');
Route::post('/getdoctorprofile','GetdoctorprofileController@updateDoctorProfile');
Route::post('/editdoctorprofile','GetdoctorprofileController@updateDoctorProfile');
//Route::get('/getdoctorprofile','GetdoctorprofileController@showupdatedDoctorProfile');

//Route::get('/editdoctorprofile', function(){
  //  return view('editdoctorprofile');
//});
Route::get('/appointment', function(){
        return view('appointment_edit');
    });
    
Route::post('/getdoctorprofile', function () {
        // Update the user's profile...
        
       return redirect('Getdoctorprofile')->with('status', 'Profile updated!');
    });

    Route::get('/forgetpassword','ForgetPasswordController@showForgotPasswordForm');
    Route::post('/forgetpassword','ForgetPasswordController@updatePassword');
    
    Route::get('/vaccination', function(){
        return view('VaccinationManagement');
    });
?>