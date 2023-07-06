@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="px-3">Informazioni sul fumetto:</h1>
        <button class="btn btn-danger" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>
    <hr>
    <div class="container d-flex flex-column justify-content-center">
        <div class="card my-showCard w-100 text-white bg-dark overflow-hidden">
            <div class="row g-0 h-100">
                <div class="col-md-4">
                    <img src="{{$comic->thumb ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png'}}" alt="comicImg">
                </div>
                <div class="col-md-8">
                    <div class="card-body d-flex flex-column justify-content-around h-100">
                        <div class="d-flex align-items-center justify-content-center flex-grow">
                            <h5 class="card-title h3">{{$comic->title}}</h5>
                        </div>
                        <div>
                            @if ($comic->description)
                                <p class="card-text"><strong class="text-danger">Descrizione: </strong>{{$comic->description}}</p>
                            @endif
                            @if ($comic->series)
                                <p class="card-text"><strong class="text-danger">Artisti: </strong>{{$comic->artists}}</p>
                            @endif
                            @if ($comic->type)
                                <p class="card-text"><strong class="text-danger">Scrittori: </strong>{{$comic->writers}}</p>
                            @endif
                            @if ($comic->artists)
                                <p class="card-text"><strong class="text-danger">Artisti: </strong>{{$comic->artists}}</p>
                            @endif
                            @if ($comic->writers)
                                <p class="card-text"><strong class="text-danger">Scrittori: </strong>{{$comic->writers}}</p>
                            @endif
                        </div>

                        @if ($comic->price)
                            <p class="card-text h1 text-center">${{$comic->price}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center w-100 gap-3 mt-3">
            <form action="{{ route('comics.destroy', $comic->id)}}" method="post">
                @csrf
    
                @method("DELETE")
    
                <input class="form-control btn btn-outline-danger" type="submit" value="ELIMINA FUMETTO">
            </form>
            <button class="btn btn-danger" onclick="window.location = '{{ route('comics.edit', $comic->id)}}'">MODIFICA FUMETTO</button>
        </div>
    </div>

</div>
@endsection