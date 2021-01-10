@extends('layout.main')

@section('contenuto')

   <main class="general-hero">
        <section class="container-hero">
            <img class="comic-image" src="{{ asset('images/cover-home.jpg')}}" alt="">
            <div class="current-series">
                CURRENT SERIES
            </div>
            <div class="blue-bar">

            </div>
        </section>
        <section class="comics">
            <div class="container container-comics">
                <ul class="comic-list">
                    @foreach ($comics as $comic)
                    <li class="list-none">
                        <a href="{{ route('comic-detail', $comic['slug']) }}">
                            <img  src="{{ $comic['image']}}" alt=" {{ $comic['title']}}">
                            <h3>
                                {{ $comic['title']}}
                            </h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="load-more">
                    LOAD MORE
                </div>
            </div>
        </section>
   </main>

@endsection