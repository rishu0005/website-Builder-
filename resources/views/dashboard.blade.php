@extends('main-layout')

@section('title', 'Dashboard')

@section('content')

<style>
    
           </style>

<div class="d-flex">
    <!-- Sidebar -->
    {{-- <aside class="sidebar p-4">
        <div>
            <h3> WebBuilder</h3>
            <nav class="d-flex flex-column gap-2">
                <a href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                <a href="#"><i class="bi bi-layers-fill"></i> My Sites</a>
                <a href="#"><i class="bi bi-file-earmark-text-fill"></i> Pages</a>
                <a href="#"><i class="bi bi-palette-fill"></i> Templates</a>
                <a href="#"><i class="bi bi-gear-fill"></i> Settings</a>
            </nav>
        </div>
        <button class="btn btn-light text-dark mt-5 w-100">Logout</button>
    </aside> --}}

    <!-- Main Content -->
    <div class="flex-grow-1" style="background-color: var(--light-gray); min-height: 100vh;">

        <!-- Topbar -->
        <nav class="topbar">
            <h5 class="m-0">Welcome, Admin 👋</h5>
            <a href="{{ route('new-site') }}" class="button">New Site</a>
        </nav>

        <!-- Dashboard -->
        <div class="container p-4">

            <h2 class="mb-4 fw-bold">Dashboard Overview</h2>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <h6>Total Sites</h6>
                        <h3>14</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <h6>Total Pages</h6>
                        <h3>73</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <h6>Pending Requests</h6>
                        <h3>3</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <h6>Templates</h6>
                        <h3>8</h3>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h4 class="mb-3">Quick Actions</h4>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('new-site') }}" class="quick-action-btn"><i class="bi bi-plus-circle-fill"></i> Create New Site</a>
                    <button class="quick-action-btn"><i class="bi bi-palette-fill"></i> Manage Templates</button>
                    <button class="quick-action-btn"><i class="bi bi-file-earmark-text-fill"></i> View All Pages</button>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
 