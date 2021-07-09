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
    </div>
</div>

@endsection