<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('project.project');})->name('startProject');;
Route::get('/selectPage', function () {  return view('project.selectPage');})->name('selectSite');
