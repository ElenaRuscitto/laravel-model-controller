@extends('layout.main')







@section('content')

    <div class="container">
        <div class="row">
            <h1>{{ $title }}</h1>

        @foreach ($movies as $movie)

            <div class="col">
                <div class="card my-3" style="width: 26rem;">
                    <div class="card-body">
                      <h4 class="card-title">{{ $movie->title }}</h4>
                      <h5 class="card-title">{{ $movie->original_title }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->nationality }}</h6>
                      <p class="card-text">{{ $movie->vote }}</p>
                      <p class="card-text">{{ $movie->date }}</p>

                    </div>
                  </div>
            </div>


            @endforeach

        </div>
    </div>


@endsection
