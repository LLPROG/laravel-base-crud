@extends('template.base')

@section('title', $pageTitle)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    {{ $comic->title }}
                </h1>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>
                    {{ $comic->description }}
                </p>
                <p>
                    Price: {{ $comic->price }} euro
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('comics.create') }}">create comic</a>
            </div>
        </div>
    </div>
@endsection
