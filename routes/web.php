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

Route::get('/create/student', 'StudentsController@store');

// Route::get('/create/student', function(){
//     $student = \App\Student::create([
//         'nama' => 'Qylin',
//         'nis' => 13342,
//         'jenis_kelamin' => 'P',
//         'alamat' => 'tpl',
//         'email' => 'qylin@gmail.com',
//         'remember_token' => \Str::random(60)
//     ]);

//     return $student;
// });
 
//halo belajar git
