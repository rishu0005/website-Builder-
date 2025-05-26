<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('project.project');})->name('newSite');;
Route::get('/selectSite', function () {  return view('project.selectPage');})->name('selectSite');
Route::get('/selectPage', function () {  return view('project.page');})->name('selectPage');
Route::get('/section', function () {  return view('section1');})->name('section');
Route::get('/nav', function () {  return view('nav');})->name('nav');
Route::get('/nav1', function () {  return view('nav');})->name('nav');
Route::get( '/hero', function () {  return view('heroSection');})->name('hero');
Route::get('/dashboard', function () {  return view('dashboard');})->name('dashboard');