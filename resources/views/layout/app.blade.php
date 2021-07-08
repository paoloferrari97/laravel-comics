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
    <div class="jumbotron"></div>
    {{-- /sezione jumbotron --}}

</header>
{{-- /header --}}

{{-- main --}}
<main>
    @yield('main')
</main>
{{-- main --}}

{{-- footer --}}
<footer>

    {{-- prima sezione --}}
    <div class="prima_sez_footer">
        <div class="container">
            <div>
                <div>
                    <div>
                        <h3>DC COMICS</h3>
                        <span>Characters</span>
                        <span>Comics</span>
                        <span>Movies</span>
                        <span>TV</span>
                        <span>Games</span>
                        <span>Videos</span>
                        <span>News</span>
                        <h3>SHOP</h3>
                        <span>Shop DC</span>
                        <span>Shop DC Collectibles</span>
    
                    </div>
                    <div>
                        <h3>DC</h3>
                        <span>Terms Of Use</span>
                        <span>Privacy Policy (New)</span>
                        <span>Ad Choices</span>
                        <span>Advertising</span>
                        <span>Jobs</span>
                        <span>Subscriptions</span>
                        <span>Talent Workshops</span>
                        <span>CPSC Certificates</span>
                        <span>Ratings</span>
                        <span>Shop Help</span>
                        <span>Contact Us</span>
                    </div>
                    <div>
                        <h3>SITES</h3>
                        <span>DC</span>
                        <span>MAD Magazine</span>
                        <span>DC Kids</span>
                        <span>DC Universe</span>
                        <span>DC Power Visa</span>
                        
                    </div>
                </div>
                <div>
                    <span>
                        All Site Content TM and <i class="far fa-copyright"></i> 2020 DC Entertainment, unless otherwise <span>noted here</span>. All right reserved.<br><span>Cookies Settings</span> 
                    </span>
                </div>
            </div>
            <div></div>
        </div>
    </div>
    {{-- /prima sezione --}}

    {{-- seconda sezione --}}
    <div class="seconda_sez_footer">
        <div class="container">
            <a href="#">SIGN-UP NOW!</a>
            <div>
                <span>FOLLOW US</span>
                <img src="{{asset('img/footer-facebook.png')}}" alt="facebook">
                <img src="{{asset('img/footer-twitter.png')}}" alt="twitter">
                <img src="{{asset('img/footer-youtube.png')}}" alt="youtube">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="pinterest">
                <img src="{{asset('img/footer-periscope.png')}}" alt="periscope">
            </div>
        </div>
    </div>
    {{-- /seconda sezione --}}

</footer>
{{-- footer --}}

</body>
</html>