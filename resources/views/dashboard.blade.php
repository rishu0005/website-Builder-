@extends('main-layout')

@section('title', 'Dashboard')

@section('content')

<style>
    .sidebar {
        width: 260px;
        min-height: 100vh;
        background-color: var(--primary-color);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: var(--shadow-md);
    }

    .sidebar h3 {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .sidebar a {
        padding: 0.75rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
        color: #fff;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .sidebar a:hover {
        background-color: var(--primary-hover);
    }

    .topbar {
        height: 70px;
        background: #fff;
        box-shadow: var(--shadow-sm);
        padding: 0 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .stat-card {
        background: #fff;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-4px);
    }

    .stat-card h6 {
        font-size: 0.95rem;
        color: var(--text-color);
        margin-bottom: 0.5rem;
    }

    .stat-card h3 {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-color);
    }

    .quick-action-btn {
        border: 1px solid var(--border-color);
        padding: 0.75rem 1.25rem;
        border-radius: 12px;
        background: #fff;
        color: var(--primary-color);
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .quick-action-btn:hover {
        background: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }
</style>

<div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar p-4">
        <div>
            <h3>🌐 WebBuilder</h3>
            <nav class="d-flex flex-column gap-2">
                <a href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                <a href="#"><i class="bi bi-layers-fill"></i> My Sites</a>
                <a href="#"><i class="bi bi-file-earmark-text-fill"></i> Pages</a>
                <a href="#"><i class="bi bi-palette-fill"></i> Templates</a>
                <a href="#"><i class="bi bi-gear-fill"></i> Settings</a>
            </nav>
        </div>
        <button class="btn btn-light text-dark mt-5 w-100">Logout</button>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow-1" style="background-color: var(--light-gray); min-height: 100vh;">

        <!-- Topbar -->
        <nav class="topbar">
            <h5 class="m-0">Welcome, Admin 👋</h5>
            <button class="btn btn-primary">New Site</button>
        </nav>

        <!-- Dashboard -->
        <div class="container-fluid p-4">

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
                    <button class="quick-action-btn"><i class="bi bi-plus-circle-fill"></i> Create New Site</button>
                    <button class="quick-action-btn"><i class="bi bi-palette-fill"></i> Manage Templates</button>
                    <button class="quick-action-btn"><i class="bi bi-file-earmark-text-fill"></i> View All Pages</button>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
 