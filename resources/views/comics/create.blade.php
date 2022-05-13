@extends('template.base')

@section('title', 'create comics')

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

                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    {{-- title --}}
                    <div class="mb-3">
                      <label for="title" class="form-label">title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>

                    {{-- @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    {{-- description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea type="text" class="form-control" id="description" name="description"></textarea>
                    </div>

                    {{-- @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    {{-- thumb --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label">thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    {{-- @error('thumb')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    {{-- price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    {{-- @error('price')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    {{-- series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    {{-- @error('series')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    {{-- sale_date --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">sale date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    {{-- @error('sale_date')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    {{-- type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                    {{-- @error('type')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror --}}

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
