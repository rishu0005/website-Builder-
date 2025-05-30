<?php

use Illuminate\Support\Facades\Route;

Route::get('/new-project', function () { return view('project.project');})->name('new-site');;
Route::get('/select-site', function () {  return view('project.selectPage');})->name('select-site');
Route::get('/select-pages', function () {  return view('project.page');})->name('select-pages');
Route::get('/section', function () {  return view('section1');})->name('section');
Route::get('/nav', function () {  return view('nav');})->name('nav');
Route::get('/nav1', function () {  return view('nav1');})->name('nav1');
Route::get('/footer', function () {  return view('footer');})->name('footer');
Route::get('/about', function () {  return view('about');})->name('about');
Route::get( '/hero', function () {  return view('heroSection');})->name('hero');
Route::get('/', function () {  return view('dashboard');})->name('dashboard');  
Route::get( '/why-choose-us', function() { return view('why-choose-us');})->name('why-choose-us');