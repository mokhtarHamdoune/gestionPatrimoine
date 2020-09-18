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

// Route::get('/', function () {
//     return view('SG.indexSG');
// });


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//SG

Route::get('/sg', function () {
    return view('sg/indexSG');
});

Route::get('/sg/selectpromo', function () {
    return view('sg/selectpromoSG');
});

Route::get('/sg/{id_depart}/selectpromo','SeanceController@get_promo');
Route::get('/sg/{id_depart}/ajoutpromo','SeanceController@get_ajout_promo');

Route::get('/sg/{id_depart}/empoidutemps/{id_promo}','SeanceController@get_emploi');

Route::post('/ajaxAddmodule','SeanceController@ajaxAddmodule');
Route::post('/ajaxdeleteseance','SeanceController@ajaxdeleteseance');
Route::post('/ajaxaddseance','SeanceController@ajaxaddseance');
Route::post('/ajaxupdatesalle','SeanceController@ajaxupdatesalle');
Route::post('/ajaxnewpromo','SeanceController@ajaxnewpromo');
////salles ////

Route::get('/sg/{id_depart}/search','SalleController@create')->name('search');
Route::get('/sg/{id_depart}/search/result','SalleController@index')->name('search.result');
Route::post('/sg/{id_depart}/search/result','ReservationSalleController@store')->name("search.reserver");


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//ENseignant


//Notification

Route::get('/sg/notification','PanneController@index')->name('notif');
Route::get('/sg/notification/delete','PanneController@delete')->name('notif.delete');
Route::get('/sg/notification/details','PanneController@show');

///Prof 

Route::get('/enseignant',function(){
    return view('Enseignant.index');
});
//afficher la page pour declarer une panne
Route::get('/enseignant/{id_deparement}/declarer','PanneController@create')->name('declarer.index');
Route::post('/enseignant/{id_prof}/declarer','PanneController@store')->name('declarer.store');