<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('project.project');})->name('startProject');;
Route::get('/selectSite', function () {  return view('project.selectPage');})->name('selectSite');
Route::get('/selectPage', function () {  return view('project.page');})->name('selectPage');
Route::get('/test', function () {  return view('dashboard');})->name('dashboard');
Route::get('/section', function () {  return view('section');})->name('section');

