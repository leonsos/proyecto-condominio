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
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
        //roles
        Route::post('roles/store','RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

        Route::get('roles','RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');  
        
        Route::get('roles/create','RoleController@create')->name('roles.create')
        ->middleware('can:roles.create'); 

        Route::put('roles/{role}','RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

        Route::get('eroles/{role}','RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

        Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

        Route::get('roles/{role}','RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');

        //product
        Route::post('products/store','ProductController@store')->name('products.store')
        ->middleware('can:products.create');
         
        Route::get('products','ProductController@index')->name('products.index')
        ->middleware('can:products.index');    

        Route::get('products/create','ProductController@create')->name('products.create')
        ->middleware('can:products.create'); 

        Route::put('products/{product}','ProductController@update')->name('products.update')
        ->middleware('can:products.edit');
        
        Route::get('eproducts/{product}','ProductController@show')->name('products.show')
        ->middleware('can:products.show');
        
        Route::delete('products/{product}','ProductController@destroy')->name('products.destroy')
        ->middleware('can:produtcs.destroy');

        Route::get('products/{product}','ProductController@edit')->name('products.edit')
        ->middleware('can:products.edit');
        //Residences
        Route::post('residences/store','ResidenceController@store')->name('residences.store')
        ->middleware('can:residences.create');

        Route::get('residences/create','ResidenceController@create')->name('residences.create')
        ->middleware('can:residences.create');

        Route::put('residences/{residence}','ResidenceController@update')->name('residences.update')
        ->middleware('can:residences.edit');

        Route::get('residences','ResidenceController@index')->name('residences.index')
        ->middleware('can:residences.index'); 
        
        Route::get('eresidences/{residence}','ResidenceController@show')->name('residences.show')
        ->middleware('can:residences.show'); 
        
        Route::delete('residences/{residence}','ResidenceController@destroy')->name('residences.destroy')
        ->middleware('can:residences.destroy');
        
        Route::get('residences/{residence}','ResidenceController@edit')->name('residences.edit')
        ->middleware('can:residences.edit');
        //buildings
        Route::put('buildings/{building}','BuildingController@update')->name('buildings.update')
        ->middleware('can:buildings.edit');

        Route::get('buildings/{building}','BuildingController@edit')->name('buildings.edit')
        ->middleware('can:buildings.edit');

        Route::delete('buildings/{building}','BuildingController@destroy')->name('buildings.destroy')
        ->middleware('can:buildings.destroy');
        
        Route::get('buildings/create','BuildingController@create')->name('buildings.create')
        ->middleware('can:buildings.create');

        Route::post('buildings/store','BuildingController@store')->name('buildings.store')
        ->middleware('can:buildings.create');

        Route::get('ebuildings/{building}','BuildingController@show')->name('buildings.show')
        ->middleware('can:buildings.show'); 
        //Users          
        Route::get('users','UserController@index')->name('users.index')
        ->middleware('can:users.index');  

        Route::put('users/{user}','UserController@update')->name('users.update')
        ->middleware('can:users.edit');
         
        Route::get('eusers/{user}','UserController@show')->name('users.show')
        ->middleware('can:users.show');
         
        Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
         ->middleware('can:users.destroy');
 
        Route::get('users/{user}','UserController@edit')->name('users.edit')
         ->middleware('can:users.edit');
});
        
        

         

        

        
        
        
        
        

        
        

       
