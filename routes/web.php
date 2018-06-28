<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom',[
    'uses' => 'LoginController@login',
    'as'   => 'login.custom'
]);

Route::group(['middleware' => 'auth'],function(){
    Route::get('/admin_home',function(){
        if(Session::has('is_admin') && Session::get('is_admin')=='t'){
            return view('admin.admin_home');
        }
        else{
            return redirect()->back();
        }     
    })->name('admin_home');;
    
    Route::get('/user_home',function(){
        if(Session::has('is_admin') && (Session::get('is_admin')=='f')){
            return view('employee.user_home');
        }
        else{
            return redirect()->back();
        }
       
    })->name('user_home');
    
});


Route::resource('tickets','ticketsController');

Route::get('/add_emp',function(){
    if(Session::has('is_admin') && Session::get('is_admin')=='t'){
        return view('admin.add_emp');
    }
    else{
        return redirect()->back();
    }     
})->name('add_emo');;