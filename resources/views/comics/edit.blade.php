@extends('layouts.main')

@include('partials.breadcrumb', ['link1'=>'Edit'])

@section('content')
    <div class="container">

        <div class="d-flex justify-between align-items-center">
            <h1>Edit - {{ $comic->title}}</h1>
            <div class="ms-auto">
                @include('partials.form_delete', compact('comic'))
            </div>
        </div>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{ old('title', $comic->title) }}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelp" maxlength="60">
          @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input value="{{ old('description',$comic->description) }}" type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description">
          @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumbnail</label>
          <input value="{{ old('thumb',$comic->thumb) }}" type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb">
          @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input value="{{ old('price',$comic->price) }}" type="number" step=".01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price" aria-describedby="priceHelp">
          @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input value="{{ old('series',$comic->series) }}" type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" aria-describedby="seriesHelp" maxlength="60">
          @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input value="{{ old('sale_date',$comic->sale_date) }}" type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
          @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input value="{{ old('type',$comic->type) }}" type="text" class="form-control @error('type') is-invalid @enderror" id="type" aria-describedby="typeHelp" maxlength="40" name="type">
          @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>

    </div>
@endsection
