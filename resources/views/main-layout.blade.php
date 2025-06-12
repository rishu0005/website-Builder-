<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield( 'title' , 'CMS Site')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/bootsrtap.css') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style')
</head>
<body>
        <!-- Sidebar -->
    <aside class="sidebar p-4">
        <div>
            <h3> WebBuilder</h3>
            <nav class="d-flex flex-column gap-2">
                <a href="{{ route('dashboard') }}"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                <a href="#"><i class="bi bi-layers-fill"></i> My Sites</a>
                <a href="#"><i class="bi bi-file-earmark-text-fill"></i> Pages</a>
                <a href="#"><i class="bi bi-palette-fill"></i> Templates</a>
                <a href="#"><i class="bi bi-gear-fill"></i> Settings</a>
            </nav>
        </div>
        <button class="btn btn-light text-dark mt-5 w-100">Logout</button>
    </aside>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset("js/bootstrap.js") }} " ></script>
    <script src="{{ asset("js/jquery.js") }} " ></script>
    <script src="https://cdn.tailwindcss.com " ></script>
@yield('script')
</body>
</html>