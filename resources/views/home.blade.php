@extends('template.base')

@section('title', 'comic home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            home <a href="{{ Route('Comics.index') }}"> route index</a>
        </div>
    </div>
</div>
@endsection


