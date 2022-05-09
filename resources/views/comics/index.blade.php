@extends('template.base')

@section('title', 'titolo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <ul>
                @foreach ($data as $cardTitle)
                    <li>
                        <a href="{{ Route('Comics.show', $cardTitle->id) }}">{{ $cardTitle->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
