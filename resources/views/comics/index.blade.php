@extends('template.base')

@section('title', 'titolo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <ul>
                @foreach ($comics as $comic)
                    <li>
                        <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    </li>
                @endforeach
            </ul>

            {{ $comics->links() }}
        </div>
    </div>
</div>
@endsection
