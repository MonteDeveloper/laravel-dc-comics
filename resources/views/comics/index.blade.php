@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="px-3">Ultime uscite:</h1>
            <button class="btn btn-danger mx-3" onclick="window.location = '{{ route('comics.create')}}'">AGGIUNGI UN FUMETTO</button>
        </div>
        <hr>
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
            <div class="p-3 col-3">
                <div class="card my-card text-white bg-dark h-100" onclick="window.location = '{{ route('comics.show', $comic->id) }}'">
                    <img src="{{$comic->thumb ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png'}}" class="card-img-top" alt="comicImg">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title text-center">{{$comic->title}}</h5>
                    </div>
                </div>    
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection