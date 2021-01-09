@extends('layout.main')

@section('contenuto')

   <main class="general-hero">
        <section class="container-hero " style="background-image: url({{ $comic['image-hero'] }})">
            <img class="comic-image" src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
        </section>

        <section class="details">
            <div class="container-comics">
               <h1>{{ $comic['title'] }}</h1>
               <h1>{!! $comic['body'] !!}</h1>
               <h1>{{ $comic['price'] }}</h1>
            </div>
        </section>
   </main>

@endsection