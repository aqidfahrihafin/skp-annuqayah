<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/raport', function () {  return view('welcome');});
Route::get('/ ', function () {  return view('auth.login');});
Route::get('/dashboard', function () {  return view('pages.index');});
Route::get('/pesantren', function () {  return view('pages.profilpesantren.index');});
Route::get('/sanahdirasah', function () {  return view('pages.sanahdirasah.index');});
Route::get('/rayon', function () {  return view('pages.rayon.index');});
Route::get('/santri', function () {  return view('pages.santri.index');});
Route::get('/pengguna', function () {  return view('pages.pengguna.index');});
Route::get('/datatagihan', function () {  return view('pages.datatagihan.index');});
Route::get('/transaksi', function () {  return view('pages.datatransaksi.index');});

