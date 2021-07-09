@extends('layout.app')

@section('main')
<div class="comics">
    <div class="container">
        <div class="current_series">CURRENT SERIES</div>

        <div class="cards">
            @foreach ($comics as $index => $comic)
            <div class="card">
                <a href="{{route('Comic', ['id' => $index])}}">
                    <div>
                        <img src="{{$comic['thumb']}}" alt="Copertina Comic">
                    </div>
                    <div>
                        {{$comic['series']}}
                    </div>
                </a>
                
            </div>    
            @endforeach
        </div>

        <div>
            <span class="load_more">LOAD MORE</span>
        </div>

    </div>

    <div class="barra_blu">
        <div class="container">
            <div>
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div>
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div>
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div>
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div>
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>
@endsection