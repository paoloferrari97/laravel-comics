<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{Route::currentRouteName()}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
</head>
<body>
    
{{-- header --}}
<header>

    {{-- sezione blu --}}
    <div class="sezione_blu">
        <div class="container">
            <span>DC POWER VISA<i class="far fa-registered"></i></span>
            <span>ADDITIONAL DC SITES<i class="fas fa-caret-down"></i></span>
        </div>
    </div>
    {{-- /sezione blu --}}

    {{-- sezione bianca --}}
    <div class="sezione_bianca">
        <div class="container">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC logo">
            <a href="" class="{{Route::currentRouteName() === 'Characters' ? 'active' : ''}}">CHARACTERS<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Comics' ? 'active' : ''}}">COMICS<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Movies' ? 'active' : ''}}">MOVIES<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Tv' ? 'active' : ''}}">TV<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Games' ? 'active' : ''}}">GAMES<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Collectibles' ? 'active' : ''}}">COLLECTIBLES<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Videos' ? 'active' : ''}}">VIDEOS<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Fans' ? 'active' : ''}}">FANS<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'News' ? 'active' : ''}}">NEWS<div></div></a>
            <a href="" class="{{Route::currentRouteName() === 'Shop' ? 'active' : ''}}">SHOP<i class="fas fa-caret-down"></i><div></div></a>
            <div>
                <input type="text" id="search" name="search" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
    {{-- /sezione bianca --}}

    {{-- sezione jumbotron --}}
    <div class="jumbotron">
        <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron">
    </div>
    {{-- /sezione jumbotron --}}

</header>
{{-- /header --}}

{{-- main --}}
<main>
    @yield('main')
</main>
{{-- main --}}

{{-- footer --}}
<footer></footer>
{{-- footer --}}

</body>
</html>