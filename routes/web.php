<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {  return view('dashboard');})->name('dashboard');  
Route::get('/dashboard', function () {  return view('dashboard');})->name('dashboard');  
Route::get('/new-project', function () { return view('project.project');})->name('new-site');
Route::get('/select-site', function () {  return view('project.selectPage');})->name('select-site');
Route::get('/select-pages', function () {  return view('project.page');})->name('select-pages');
Route::get('/section', function () {  return view('section1');})->name('section');

Route::get('/nav-layout', function(){ return view('nav-layout');})->name('nav-layout');
Route::get('/nav', function () {  return view('nav');})->name('nav');
Route::get('/nav1', function () {  return view('nav1');})->name('nav1');


Route::get( '/hero-layout', function () {  return view('hero-layout');})->name('hero-layout');
Route::get( '/hero', function () {  return view('heroSection');})->name('hero');

Route::get( '/about-layout', function () {  return view('about-layout');})->name('about-layout');
Route::get('/about', function () {  return view('about');})->name('about');


Route::get('/footer-layout', function () {  return view('footer-layout');})->name('footer-layout');
Route::get('/footer', function () {  return view('footer');})->name('footer');

Route::get( '/why-choose-us-layout', function() { return view('why-choose-us-layout');})->name('why-choose-us-layout'); 
Route::get( '/why-choose-us', function() { return view('why-choose-us');})->name('why-choose-us'); 

Route::get('/service-layout', function () {  return view('service-layout');})->name('service-layout');
Route::get('/service', function () {  return view('service');})->name('service');

Route::get('/faq-layout', function () {  return view('faq-layout');})->name('faq-layout');
Route::get('/faq', function () {  return view('faq');})->name('faq');

