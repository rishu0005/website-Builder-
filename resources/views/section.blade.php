@extends('main-layout')
@section('title','XYS')
{{-- @section('style')
<style>
    .web-builder-header {
  text-align: left;
  margin-bottom: 2rem;
  padding-left: 1rem; /* optional, adjust spacing */
}

.web-builder-heading {
  font-size: 2rem;
  font-weight: 700;
  color: #0d6efd;
  margin-bottom: 0.25rem;
}

.web-builder-subheading {
  font-size: 1rem;
  color: #6c757d;
}
  * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f0f5ff;
        }
        
        .container {
            display: flex;
            height: 100vh;
        }
        
        .sidebar {
            width: 250px;
            background: linear-gradient(145deg, #1a40af, #2563eb);
            box-shadow: 2px 0 12px rgba(0,0,0,0.2);
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            color: white;
        }
        
        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            margin-bottom: 20px;
        }
        .sidebar-header:hover{
            cursor: pointer;
        }
        
        .sidebar-header h1 {
            color: white;
            font-size: 24px;
            margin-bottom: 5px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
        }
        
        .sidebar-header p {
            color: rgba(255,255,255,0.85);
            font-size: 16px;
        }
        
        .nav-item {
            padding: 14px 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            color: rgba(255,255,255,0.8);
            border-left: 4px solid transparent;
            font-weight: 500;
            position: relative;
        }
        
        .nav-item:hover {
            background-color: rgba(255,255,255,0.1);
            color: white;
        }
        
        .nav-item.active {
            background-color: rgba(255,255,255,0.15);
            color: white;
            border-left: 4px solid #80b0ff;
        }
        
        .nav-item.active:after {
            content: "";
            position: absolute;
            right: 20px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #80b0ff;
        }
        
        .nav-item:not(.active).pending:before {
            content: "";
            position: absolute;
            right: 20px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #ff4d4d;
        }
        
        .nav-item:not(.active).edited:before {
            content: "";
            position: absolute;
            right: 20px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #4dff4d;
        }
        
        .selected-counter {
            padding: 15px 20px;
            margin-top: auto;
            text-align: right;
            color: rgba(255,255,255,0.85);
            font-size: 14px;
            border-top: 1px solid rgba(255,255,255,0.2);
            background-color: rgba(0,0,0,0.1);
        }
        
        .main-content {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }
        
        .page-header {
            margin-bottom: 30px;
        }
        
        .page-header h2 {
            color: #1a40af;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .page-header p {
            color: #666;
            font-size: 16px;
        }
        
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }
        
        .card-image {
            height: 160px;
            background-color: #e9efff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card-image svg {
            width: 60px;
            height: 60px;
            color: #1a40af;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #1a40af;
            margin-bottom: 10px;
        }
        
        .card-description {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }
        
        .form-container {
            display: none;
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }
        
        .btn {
            padding: 10px 20px;
            background-color: #1a40af;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s;
        }
        
        .btn:hover {
            background-color: #0f2571;
        }
        
        .back-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #f0f0f0;
            color: #333;
            border-radius: 4px;
            margin-bottom: 20px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.2s;
            cursor: pointer;
        }
        
        .back-btn:hover {
            background-color: #e0e0e0;
        }
        
        .cards-view {
            display: block;
        }
        
.form-view {
    display: none;
}

.card{
    transform: translateY(0px);
    box-shadow: 0 8px 25px rgba(0,0,0,0);
}
        
.card:hover{
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}


        
</style>
@endsection --}}
@section('content')

<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/sectio.css')}}">
<!-- Header -->
<!-- Website Builder Header (Left-Aligned) -->

<div class="web-builder-header">
  <h2 class="web-builder-heading">Website Builder</h2>
  <p class="web-builder-subheading">Select a page to configure</p>
</div>

<!-- Cards Section Starts Here -->
<div class="row g-4">
  <!-- Cards like About Page, Navbar, etc. -->
</div>


    <!-- Selected count on top -->
    <div class="w-full max-w-4xl mb-4 text-right">
        <span class="text-lg font-semibold text-blue-900">
            Count : <span id="selected-count">0</span>
        </span>
    </div>

    <!-- Checklist heading -->
    <div class="w-full max-w-4xl mb-4">
        <h3 class="text-xl font-semibold text-blue-700">Choose the pages you want to include in your website:</h3>
    </div>

    <!-- Tiles container -->
    <main class="w-full max-w-4xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Checklist items -->
        <template id="item-template">
            @yield('cheklist')
            <button class="animated-tile"></button>
        </template>
    </main>

    <!-- Submit button -->
    <div class="w-full max-w-4xl mt-8 text-right">
        <a href="#"><button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-xl transition">Create</button></a>
    </div>

@endsection

@section('script')
<script src="{{ asset('js/section.js') }}"></script>

@endsection