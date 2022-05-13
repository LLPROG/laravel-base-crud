@extends('template.base')

@section('title', 'editi comics')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                {{-- collect errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('comics.update', $comic->id) }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                      <label for="title" class="form-label">title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ old($comic->title, $comic->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea type="text" class="form-control" id="description" name="description">{{ old($comic->description, $comic->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old($comic->thumb, $comic->thumb) }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old($comic->price, $comic->price) }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old($comic->series, $comic->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">sale date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old($comic->sale_date, $comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old($comic->type, $comic->type) }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                <div class="row">
                    <div class="col">
                        <a href="{{  url()->previous() }}"> Back </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
