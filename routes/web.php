<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


//controller untuk mahasiswa
//register
Route::get('/mahasiswa/register','MahasiswaController@masukregister');
Route::post('mahasiswa/lakukanregistrasi','MahasiswaController@store');
//login
Route::get('mahasiswa/login','MahasiswaController@masuklogin');
Route::post('/mahasiswa/lakukanlogin','MahasiswaController@login');
//logout
Route::get('/mahasiswa/logout','MahasiswaController@logout');
//daftar ke dalam kelas
Route::get('/mahasiswa/daftarkelas','MahasiswaController@masukdaftarkelas');
Route::get('/mahasiswa/lakukantambahmatkul/{id}','MahasiswaController@daftarkelas');
//daftar kelas yang diambil mahasiswa
Route::get('/mahasiswa/daftarmatkul', 'MahasiswaController@daftarmatkul');
//home
Route::get('/mahasiswa/home', 'MahasiswaController@home');
//profile dan edit profil
Route::get('/mahasiswa/profile', 'MahasiswaController@profile');
Route::get('/mahasiswa/editprofile','MahasiswaController@masukeditprofile');
Route::post('/mahasiswa/lakukaneditprofile','MahasiswaController@editprofile');


//controller untuk dosen
//register
Route::get('/dosen/register','DosenController@masukregister');
Route::post('/dosen/lakukanregistrasi','DosenController@store');
//login
Route::get('/dosen/login','DosenController@masuklogin');
Route::post('/dosen/lakukanlogin','DosenController@login');
//home
Route::get('/dosen/home', 'DosenController@home');
//logout
Route::get('/dosen/logout','DosenController@logout');
//tambah matkul
Route::get('/dosen/tambahmatkul', 'DosenController@masuktambahmatkul');
Route::post('/dosen/lakukantambahmatkul','DosenController@tambahmatkul');
//mahasiswa yang diwalikan
Route::get('/dosen/mahasiswadiwalikan', 'DosenController@perwalian');
//matkul yang diajar dan mahasiswa di kelas tersebut
Route::get('/dosen/daftarmahasiswa/{id}','DosenController@daftarmahasiswa');
Route::get('/dosen/kelasdiajar', 'DosenController@kelasdiajar');
//profil dan edit profil
Route::get('/dosen/profile', 'DosenController@profile');
Route::get('/dosen/editprofile', 'DosenController@masukeditprofile');
Route::post('/dosen/lakukaneditprofile','DosenController@editprofile');


