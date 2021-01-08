@extends('layout.main')

@section('contenuto')

   <main class="general-hero">
        <section class="container-hero">
            <img src="{{ asset('images/cover-home.jpg')}}" alt="">
        </section>

        <section class="details">
            <div class="container-comics">
               <h1>{{ $comic['title'] }}</h1>
               <h1>{{ $comic['body'] }}</h1>
               <h1>{{ $comic['price'] }}</h1>
            </div>
        </section>
   </main>

@endsection