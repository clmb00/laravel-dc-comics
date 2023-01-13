@extends('layouts.main')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('comics.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="container">
        <h1 style="display: inline;">Edit - {{ $comic->title}}</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{ $comic->title }}" type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" maxlength="60">
          <div id="titleHelp" class="form-text">Max length 60 char.</div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input value="{{ $comic->description }}" type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumbnail</label>
          <input value="{{ $comic->thumb }}" type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input value="{{ $comic->price }}" type="number" step=".01" min="0" class="form-control" id="price" name="price" aria-describedby="priceHelp">
          <div id="priceHelp" class="form-text">Two decimals.</div>
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input value="{{ $comic->series }}" type="text" class="form-control" id="series" name="series" aria-describedby="seriesHelp" maxlength="60">
          <div id="seriesHelp" class="form-text">Max length 60 char.</div>
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input value="{{ $comic->sale_date }}" type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input value="{{ $comic->type }}" type="text" class="form-control" id="type" aria-describedby="typeHelp" maxlength="40" name="type">
          <div id="typeHelp" class="form-text">Max length 40 char.</div>
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>

    <div class="d-flex justify-content-end">
        @include('partials.form_delete', compact('comic'))
    </div>

    </div>
@endsection
