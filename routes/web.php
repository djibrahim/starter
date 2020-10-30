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

route::get('/hay',function (){
    return 'hello';
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


//namespace
//tous les route dans cette methode aller vere le controleur dans le dossier front
route::namespace('Front')->group(function (){
   route::get('users','UserController@showadminname');

});

route::prefix('users')->group(function (){
    route::get('show','UserController@showadminname'); //<==>route::get('users/show','UserController@showadminname'
});//<==>sont equax
route::group(['prefix'=>'users','middleware'=>'auth'],function (){
    route::get('show','UserController@showadminname');
});

//-----------------------------------------------------------------------------------------

//middleware
 route::get('check',function (){
     return 'middleware';
 })->middleware('auth');

 //--------------------------------------------------------------------------------------------

 //route::get('first','Front\FirstController@show');
//<==>
 route::group(['namespace'=>'Front'],function (){
     route::get('first','FirstController@show');
 });

 //--------------------------------------------------------------------------------------------

route::group(['namespace'=>'Front','middleware'=>'auth'],function (){
    route::get('first0','FirstController@show0');
    route::get('first1','FirstController@show1');
    route::get('first2','FirstController@show2');

});

route::get('login',function (){
    return'asma3 7at login';
})->name('login');

//php artisan make:controller NewController --resource
//pour appler a tous les methodes (resource)  pour tarba7 lwa9t
route::resource('new','NewController');

//-------------------------------------------------
route::get('go',function (){
     //return view('welcome')->with('data','string');
    // return view('welcome')->with(['data'=>'string','age'=>23]);
    $data=[];
    $data['id']=5;
    $data['nom']='ibrahm djama';
    $data['age']=24;
    return view('welcome',$data);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
