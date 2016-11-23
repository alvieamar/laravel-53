<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', ['uses' => 'UsersController@index']);

// Route::get('users', function()
// {
//     $users = [
//         '0' => [
//             'first_name' => 'Alvie',
//             'last_name' => 'Amar',
//             'location' => 'Cebu',
//         ],
//         '1' => [
//             'first_name' => 'Aisle',
//             'last_name' => 'Bee',
//             'location' => 'Manila',
//         ],
//     ];
//     return $users;
// });
