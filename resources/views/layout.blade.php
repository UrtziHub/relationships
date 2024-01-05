<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">SUCCESS: </strong>
        <span class="block sm:inline">{{session('success')}}</span>
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger text-center" role="alert">
        {{session('error')}}
    </div>
    @endif
    @if(session('deleted'))
    <div class="alert alert-warning text-center" role="alert">
        {{session('deleted')}}
    </div>
    @endif
    <header class="bg-white">
        <nav class="flex py-4 px-8 border border-b-2">
            <a class="mr-10 uppercase font-bold" href="#">@yield('header', 'Home page')</a>
            <div class="" id="">
                <ul class="flex gap-2">
                    <li>
                        <a class="underline text-gray-600 hover:text-black active:text-black" href="{{route('index')}}">Home</a>
                    </li>
                    <li>
                        <a class="underline text-gray-600 hover:text-black active:text-black active" href="{{route('user.create')}}">Create user</a>
                    </li>
                    <li>
                        <a class="underline text-gray-600 hover:text-black active:text-black" href="{{route('address.index')}}">Addresses</a>
                    </li>
                    <li>
                        <a class="underline text-gray-600 hover:text-black active:text-black" href="{{route('address.asign')}}">Asign user to addrees</a>
                    </li>
                    <li>
                        <a class="underline text-gray-600 hover:text-black active:text-black" href="{{route('posts.index')}}">Posts</a>
                    </li>
                    <li>
                        <a class="underline text-gray-600 hover:text-black active:text-black" href="{{route('subjects.index')}}">Subject</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @section('newTask')
    @show
    @section('currentUserTable')
    @show
    @section('searchSection')
    @show
</body>

</html>