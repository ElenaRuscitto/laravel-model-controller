@extends('layout.main')







@section('content')

    <div class=" bg-dark">
        <div class="container">
            <h1 class="text-white text-center py-3">{{ $title }}</h1>
            <div class="row row-cols-3 ">


            @foreach ($movies as $movie)

                <div class="col">
                    <div class="card my-3" style="width: 26rem;">
                        <div class="card-body">
                          <h4 class="card-title">{{ $movie->title }}</h4>
                          <h5 class="card-title">{{ $movie->original_title }}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">Nazionalità: {{ $movie->nationality }}</h6>
                          <p class="card-text">Voto: {{ $movie->vote }}</p>
                          <a href="{{ route('detail', ['id' => $movie->id]) }}" class="card-link">Details Film</a>
                        </div>
                    </div>
                </div>


                @endforeach

            </div>
        </div>
    </div>


@endsection
