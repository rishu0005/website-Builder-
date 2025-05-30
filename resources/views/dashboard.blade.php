@extends('main-layout')

@section('title', 'Dashboard')

@section('content')

<style>
        :root {
            /* Primary Colors - Deep Blue to Light Blue Gradient */
            --primary-dark: #1e293b;
            --primary-medium: #334155;
            --primary-light: #64748b;
            --primary-accent: #3b82f6;
            --primary-hover: #2563eb;
            
            /* Secondary Colors - Purple to Pink Gradient */
            --secondary-dark: #581c87;
            --secondary-medium: #7c3aed;
            --secondary-light: #a855f7;
            --secondary-accent: #ec4899;
            
            /* Neutral Colors */
            --bg-primary: #f8fafc;
            --bg-secondary: #ffffff;
            --bg-card: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --border-light: #f1f5f9;
            
            /* Success/Warning/Error Colors */
            --success: #10b981;
            --success-light: #d1fae5;
            --warning: #f59e0b;
            --warning-light: #fef3c7;
            --error: #ef4444;
            --error-light: #fee2e2;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--primary-accent) 0%, var(--secondary-medium) 100%);
            --gradient-secondary: linear-gradient(135deg, var(--secondary-medium) 0%, var(--secondary-accent) 100%);
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
        }

        .sidebar {
            width: 280px;
            min-height: 100vh;
            background: var(--gradient-primary);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: var(--shadow-xl);
            position: relative;
            overflow: hidden;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .sidebar-content {
            padding: 2rem 1.5rem;
            z-index: 1;
            position: relative;
        }

        .sidebar h3 {
            font-size: 1.75rem;
            margin-bottom: 2.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #fff, rgba(255,255,255,0.8));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .sidebar a {
            padding: 1rem 1.25rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: rgba(255,255,255,0.9);
            border-radius: 12px;
            transition: all 0.3s ease;
            margin-bottom: 0.5rem;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .sidebar a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.15);
            color: #fff;
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .sidebar a:hover::before {
            left: 100%;
        }

        .sidebar-footer {
            padding: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
        }

        .topbar {
            height: 80px;
            background: var(--bg-secondary);
            box-shadow: var(--shadow-md);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--border-light);
        }

        .topbar-search {
            flex: 1;
            max-width: 400px;
            margin: 0 2rem;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: var(--bg-primary);
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-accent);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .stat-card {
            background: var(--bg-card);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
            border: 1px solid var(--border-light);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-secondary);
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-accent);
        }

        .stat-card h6 {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-card h3 {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-trend {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            margin-top: 1rem;
        }

        .trend-up {
            color: var(--success);
        }

        .trend-down {
            color: var(--error);
        }

        .quick-action-btn {
            border: 2px solid var(--border-color);
            padding: 1rem 1.5rem;
            border-radius: 16px;
            background: var(--bg-card);
            color: var(--text-primary);
            transition: all 0.3s ease;
            font-weight: 600;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .quick-action-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .quick-action-btn:hover {
            color: #fff;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .quick-action-btn:hover::before {
            left: 0;
        }

        /* Demo Layout */
        .demo-container {
            display: flex;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .actions-section {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
        }

        /* Dark Mode Toggle */
        .theme-toggle {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Dark Theme */
        .dark-theme {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-card: #1e293b;
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-muted: #64748b;
            --border-color: #334155;
            --border-light: #475569;
        }

        .dark-theme .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
        }

        .dark-theme .topbar {
            background: var(--bg-secondary);
            border-bottom: 1px solid var(--border-color);
        }

        .dark-theme .search-input {
            background: var(--bg-primary);
            color: var(--text-primary);
            border-color: var(--border-color);
        }

        .dark-theme .quick-action-btn {
            background: var(--bg-card);
            color: var(--text-primary);
            border-color: var(--border-color);
        }

        /* Button Style */
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: var(--primary-gradient);
            color: white;
            padding: 1rem 2rem;
            border-radius: 16px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl), var(--shadow-glow);
        }

        .button:hover::before {
            left: 100%;
        }

        .button:active {
            transform: translateY(-1px);
        }
    </style>

<div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar p-4">
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
    </aside>

    <!-- Main Content -->
    <div class="flex-grow-1" style="background-color: var(--light-gray); min-height: 100vh;">

        <!-- Topbar -->
        <nav class="topbar">
            <h5 class="m-0">Welcome, Admin 👋</h5>
            <a href="{{ route('new-site') }}" class="button">New Site</a>
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
                    <a href="{{ route('new-site') }}" class="quick-action-btn"><i class="bi bi-plus-circle-fill"></i> Create New Site</a>
                    <button class="quick-action-btn"><i class="bi bi-palette-fill"></i> Manage Templates</button>
                    <button class="quick-action-btn"><i class="bi bi-file-earmark-text-fill"></i> View All Pages</button>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
 