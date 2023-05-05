@extends('layouts.app')

@section('page.main')
<section>
    <div class="container">
        @foreach ($movies as $movie)

        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card {{ $movie->title}}</h5>
              <p class="card-text">{{ $movie->original_title }}</p>
              <a href="#" class="btn btn-primary">Vai al dettaglio</a>
            </div>
          </div>
          @endforeach
    </div>
</section>
@endsection