@extends('layout.app')

@section('main')
<div class="comics">
    <div class="container">
        <div class="current_series">CURRENT SERIES</div>

        <div class="cards">
            @foreach ($comics as $comic)
            <div class="card">
                <div>
                    <img src="{{$comic['thumb']}}" alt="Copertina Comic">
                </div>
                <div>
                    {{$comic['title']}}
                </div>
            </div>    
            @endforeach
        </div>

        <div>
            <span>LOAD MORE</span>
        </div>

    </div>
</div>
@endsection