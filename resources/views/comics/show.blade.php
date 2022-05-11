@extends('template.base')

@section('title', $pageTitle)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    {{ $comic->title }}
                </h1>
                <p>
                    {{ $comic->description }}
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ Route('Comics.create') }}">create comic</a>
            </div>
        </div>
    </div>
@endsection
