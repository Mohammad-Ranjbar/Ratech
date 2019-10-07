<?php




Route::group(['namespace' => 'Ratech\AdminPanel\Http\controllers'], function () {

    Route::get('/contact-uss', 'ContactController@index');

});

// Route::get('/contact-uss', function (){
//     return view('contact::contact');
// });

