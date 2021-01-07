@extends('layout.main')

@section('contenuto')

   <main class="general-hero">
        <section class="container-hero">
            <img src="{{ asset('images/cover-home.jpg')}}" alt="">
        </section>
        <section class="comics">
            <div class="container-comics">
                <ul class="comic-list">
                    @foreach ($comics as $comic)
                    <li class="list-none">
                        <a href="{{ route('comic-detail', $comic['id']) }}">
                            <img src="{{ $comic['image']}}" alt="">
                            <h3>
                                {{ $comic['title']}}
                            </h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
   </main>

@endsection