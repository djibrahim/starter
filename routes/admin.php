<?php
//aller vere provider-->routeserviceprovider-->function map()--.crree une fonction -->remplire la methode ()
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

route::get('/admin',function (){
    return 'hello admin';
});

route::get('/hay1/{id?}',function (){
    return 'hamza';
});

route::get('/show_string/{id?}',function (){
    return 'hamza';
})->name("str");

route::get('/show_number/{id}',function ($id){
    return $id;
})->name("num");
