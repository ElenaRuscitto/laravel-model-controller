@extends('layout.main')







@section('content')


<div class="bg-dark">
    <div class="container">
        <h1 class="text-white text-center py-3">{{ $title }}</h1>
        <div class="row row-cols-2 text-white ">




            <div class="col  h-100 py-5">

                      <img src="{{ $movie->img  }}" alt="{{ $movie->title }}" class="image py-2">



            </div>

            <div class="col my-5 ">

                <h4 class="mt-5"><strong>Titolo: </strong>{{ $movie->title }}</h4>
                <h5><strong>Titolo Originale: </strong>{{ $movie->original_title }}</h5>
                <h6><strong>Nazionalità: </strong>{{ $movie->nationality }}</h6>
                <p><strong>Voto: </strong>{{ $movie->vote }}</p>
                <p><strong>Data: </strong>{{ $movie->date }}</p>
                <p><strong>Trama: </strong> {{ $movie->plot }}</p>
            </div>



        </div>
    </div>
</div>

@endsection
