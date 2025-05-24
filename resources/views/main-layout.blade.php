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
    <main>
        @yield('content')
    </main>

    <script src="{{ asset("js/bootstrap.js") }} " ></script>
    <script src="{{ asset("js/jquery.js") }} " ></script>
    <script src="https://cdn.tailwindcss.com " ></script>
@yield('script')
</body>
</html>