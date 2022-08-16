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
    return view('landingpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/adminhome', 'HomeController@admin')->name('adminhome');

Route::get('/hashpasswordallusers', [
    'uses' => 'ProfileController@hashpasswordallusers',
    'as' => 'hashpasswordallusers'
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/profile.edit', [
    'uses' => 'ProfileController@edit',
    'as' => 'profile.edit'
]);

Route::post('/profile.update', [
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
]);

Route::post('/profile.password', [
    'uses' => 'ProfileController@password',
    'as' => 'profile.password'
]);

Route::put('/profile.update', [
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
]);

Route::put('/profile.password', [
    'uses' => 'ProfileController@password',
    'as' => 'profile.password'
]);

Route::get('/user.index', [
    'uses' => 'UserController@index',
    'as' => 'user.index'
]);

Route::get('/bem', [
    'uses' => 'HomeController@bem',
    'as' => 'bem'
]);

Route::get('/himpunanku', [
    'uses' => 'HimpunanController@index',
    'as' => 'himpunanku'
]);

Route::get('/achievement', [
    'uses' => 'HimpunanController@achievement',
    'as' => 'achievement'
]);

Route::get('/osean', [
    'uses' => 'KepanitiaanController@osean',
    'as' => 'osean'
]);

Route::get('/mipa-mengajar', [
    'uses' => 'KepanitiaanController@mipaMengajar',
    'as' => 'mipa-mengajar'
]);

Route::get('/mpc', [
    'uses' => 'KepanitiaanController@mpc',
    'as' => 'mpc'
]);

Route::get('/mipa-award', [
    'uses' => 'KepanitiaanController@mipaAward',
    'as' => 'mipa-award'
]);

Route::get('/mipa-bersatu', [
    'uses' => 'KepanitiaanController@mipaBersatu',
    'as' => 'mipa-bersatu'
]);

Route::get('/ppm', [
    'uses' => 'KepanitiaanController@ppm',
    'as' => 'ppm'
]);

// Route::get('/fmipa', [
//     'uses' => 'HimpunanController@fmipa',
//     'as' => 'fmipa'
// ]);

Route::get('/himatika', [
    'uses' => 'HimpunanController@himatika',
    'as' => 'himatika'
]);

Route::get('/himaka', [
    'uses' => 'HimpunanController@himaka',
    'as' => 'himaka'
]);

Route::get('/hifi', [
    'uses' => 'HimpunanController@hifi',
    'as' => 'hifi'
]);

Route::get('/himbio', [
    'uses' => 'HimpunanController@himbio',
    'as' => 'himbio'
]);

Route::get('/himasta', [
    'uses' => 'HimpunanController@himasta',
    'as' => 'himasta'
]);

Route::get('/pedra', [
    'uses' => 'HimpunanController@pedra',
    'as' => 'pedra'
]);

Route::get('/himatif', [
    'uses' => 'HimpunanController@himatif',
    'as' => 'himatif'
]);

Route::get('/hmte', [
    'uses' => 'HimpunanController@hmte',
    'as' => 'hmte'
]);

Route::get('/himaktu', [
    'uses' => 'HimpunanController@himaktu',
    'as' => 'himaktu'
]);

Route::get('/himatologika', [
    'uses' => 'HimpunanController@himatologika',
    'as' => 'himatologika'
]);

// Route::get('/searchfmipa', [
//     'uses' => 'HimpunanController@searchfmipa',
//     'as' => 'searchfmipa'
// ]);

Route::get('/searchhimatika', [
    'uses' => 'HimpunanController@searchhimatika',
    'as' => 'searchhimatif'
]);

Route::get('/searchhimaka', [
    'uses' => 'HimpunanController@searchhimaka',
    'as' => 'searchhimaka'
]);

Route::get('/searchhifi', [
    'uses' => 'HimpunanController@searchhifi',
    'as' => 'searchhifi'
]);

Route::get('/searchhimbio', [
    'uses' => 'HimpunanController@searchhimbio',
    'as' => 'searchhimbio'
]);

Route::get('/searchhimasta', [
    'uses' => 'HimpunanController@searchhimasta',
    'as' => 'searchhimasta'
]);

Route::get('/searchpedra', [
    'uses' => 'HimpunanController@searchpedra',
    'as' => 'searchpedra'
]);

Route::get('/searchhimatif', [
    'uses' => 'HimpunanController@searchhimatif',
    'as' => 'searchhimatif'
]);

Route::get('/searchhmte', [
    'uses' => 'HimpunanController@searchhmte',
    'as' => 'searchhmte'
]);

Route::get('/searchhimaktu', [
    'uses' => 'HimpunanController@searchhimaktu',
    'as' => 'searchhimaktu'
]);

Route::get('/searchhimatologika', [
    'uses' => 'HimpunanController@searchhimatologika',
    'as' => 'searchhimatologika'
]);

Route::get('/alumni-himatika', [
    'uses' => 'AlumniController@himatika',
    'as' => 'alumni-himatika'
]);

Route::get('/alumni-himaka', [
    'uses' => 'AlumniController@himaka',
    'as' => 'alumni-himaka'
]);

Route::get('/alumni-hifi', [
    'uses' => 'AlumniController@hifi',
    'as' => 'alumni-hifi'
]);

Route::get('/alumni-himbio', [
    'uses' => 'AlumniController@himbio',
    'as' => 'alumni-himbio'
]);

Route::get('/alumni-himasta', [
    'uses' => 'AlumniController@himasta',
    'as' => 'alumni-himasta'
]);

Route::get('/alumni-pedra', [
    'uses' => 'AlumniController@pedra',
    'as' => 'alumni-pedra'
]);

Route::get('/alumni-himatif', [
    'uses' => 'AlumniController@himatif',
    'as' => 'alumni-himatif'
]);

Route::get('/alumni-hmte', [
    'uses' => 'AlumniController@hmte',
    'as' => 'alumni-hmte'
]);

Route::get('/alumni-himaktu', [
    'uses' => 'AlumniController@himaktu',
    'as' => 'alumni-himaktu'
]);

Route::get('/alumni-searchhimatika', [
    'uses' => 'AlumniController@searchhimatika',
    'as' => 'alumni-searchhimatif'
]);

// Route::get('/alumni-searchhimaka', [
//     'uses' => 'AlumniController@searchhimaka',
//     'as' => 'alumni-searchhimaka'
// ]);

Route::get('/alumni-searchhifi', [
    'uses' => 'AlumniController@searchhifi',
    'as' => 'alumni-searchhifi'
]);

Route::get('/alumni-searchhimbio', [
    'uses' => 'AlumniController@searchhimbio',
    'as' => 'alumni-searchhimbio'
]);

Route::get('/alumni-searchhimasta', [
    'uses' => 'AlumniController@searchhimasta',
    'as' => 'alumni-searchhimasta'
]);

Route::get('/alumni-searchpedra', [
    'uses' => 'AlumniController@searchpedra',
    'as' => 'alumni-searchpedra'
]);

Route::get('/alumni-searchhimatif', [
    'uses' => 'AlumniController@searchhimatif',
    'as' => 'alumni-searchhimatif'
]);

Route::get('/alumni-searchhmte', [
    'uses' => 'AlumniController@searchhmte',
    'as' => 'alumni-searchhmte'
]);

// Route::get('/alumni-searchhimaktu', [
//     'uses' => 'AlumniController@searchhimaktu',
//     'as' => 'alumni-searchhimaktu'
// ]);

// Route::get('/alumni-searchhimatologika', [
//     'uses' => 'AlumniController@searchhimatologika',
//     'as' => 'alumni-searchhimatologika'
// ]);

// web bem
// Route::get('/beranda', function () {
//     return view('beranda');
// });
// Route::get('/himpunanbem', function () {
//     return view('himpunanbem');
// });
// Route::get('/kontak', function () {
//     return view('kontak');
// });
// Route::get('/struktur', function () {
//     return view('struktur');
// });
