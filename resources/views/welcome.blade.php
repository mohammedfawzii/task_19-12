<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/chosen/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="card-header ">
        <strong class="card-title ">@if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
</strong>
    </div>
    @foreach ($posts as $post)
    <div class="card m-5">
        <div class="card-header ">
            <strong class="card-title">{{ $post->name }}</strong>
            <small>{{ $post->title }}</small>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->description }}</p>
        </div>
    </div>
    @endforeach


</body>
</html>
