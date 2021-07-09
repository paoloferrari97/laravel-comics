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

@endsection