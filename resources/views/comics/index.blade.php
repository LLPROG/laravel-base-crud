@extends('template.base')

@section('title', 'titolo')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)

            <div class="col-3">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <div class="card">
                        <h1>
                            {{ $comic->title }}
                        </h1>
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

                        <p>
                            {{ $comic->type }}
                        </p>
                    </div>
                </a>
            </div>

        @endforeach

        {{ $comics->links() }}


    </div>
</div>
@endsection
