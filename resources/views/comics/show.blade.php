@extends('layout.app')

@section('main')

<div class="sez_blu_comic">
    <div class="container2">
        <div>
            <img src="{{$comic['thumb']}}" alt="">
            <div class="comic_book">COMIC BOOK</div>
            <div class="view_gallery">VIEW GALLERY</div>
        </div>        
    </div>
</div>

<div class="sez_bianca_comic">
    <div class="container2">
        <h2>{{$comic['title']}}</h2>
        <div class="sez_verde_prezzo">
            <div>
                <span>U.S. Price: <span>{{$comic['price']}}</span></span>
                <span>AVAILABLE</span>
            </div>
            <div>
                Check Availability <i class="fas fa-caret-down"></i>
            </div>
        </div>
        
        <p class="description">
            {{$comic['description']}}
        </p>

        <div class="adv">
            <h5>ADVERTISEMENT</h5>
            <img src="{{asset('img/adv.jpg')}}" alt="adv">
        </div>
    </div>
</div>

<div class="sez_grigia_comic">
    <div class="container2">
        <div class="talent_specs">
            <div>
                <h3>Talent</h3>
                <div>
                    <span class="first">Art by:</span>
                    <span>
                        @foreach ($comic['artists'] as $item)
                            <span style="color: #00a9dc">{{$item}}</span>@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>
                <div>
                    <span class="first">Written by:</span>
                    <span>
                        @foreach ($comic['writers'] as $item)
                            <span style="color: #00a9dc">{{$item}}</span>@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>
            </div>
            <div>
                <h3>Specs</h3>
                <div>
                    <span class="first">Series:</span>
                    <span class="series">{{$comic['series']}}</span>
                </div>
                <div>
                    <span class="first">U.S. Price:</span>
                    <span>{{$comic['price']}}</span>
                </div>
                <div>
                    <span class="first">On Sale Date:</span>
                    <span>{{$comic['sale_date']}}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="icone">
    <div class="container2">
        <div>
            <span>DIGITAL COMICS</span>
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">      
        </div>
        <div>            
            <span>SHOP DC</span>
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">      
        </div>
        <div>
            <span>COMIC SHOP LOCATOR</span>
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">      
        </div>
        <div>
            <span>SUBSCRIPTIONS</span>
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">      
        </div>
    </div>    
</div>

@endsection