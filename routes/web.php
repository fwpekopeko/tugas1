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

Route::get('/RiwayatPendidikan', function () {
    return view('pendidikan');
});

Route::get('/Skills', function () {
    return view('skills');
});

Route::get('/RiwayatPekerjaan', function () {
    return view('pastjob');
});

Route::get('/Hobi', function () {
    return view('hobi');
});

##Named Routes
##Incase ada di folder lain

##Route::get('/tugas1/Home', function () {
##    return view('tugas1.home');
##});->name("ProfilSaya");

##Route::get('/tugas1/RiwayatPendidikan', function () {
##    return view('tugas1.pendidikan');
##);->name("PendidikanSaya");

##Route::get('/tugas1/Skills', function () {
##    return view('tugas1.skills');
##});->name("SkillsSaya");

##Route::get('/tugas1/RiwayatPekerjaan', function () {
##    return view('tugas1.pastjob');
##});->name("PekerjaanSaya");

##Route::get('tugas1/Hobi', function () {
##    return view('tugas1.hobi');
##});->name("HobiSaya");