@extends('template.base')

@section('title', $title)

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
    </div>
@endsection
