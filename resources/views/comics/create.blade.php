@extends('layouts.main')

@include('partials.breadcrumb', ['link1'=>'Create'])

@section('content')
<div class="container">
    <h1>Create a new comic</h1>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{old('title')}}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelp" maxlength="60">
          @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input value="{{old('description')}}" type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description">
          @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumbnail</label>
          <input value="{{old('thumb')}}" type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb">
          @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input value="{{old('price')}}" type="number" step=".01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price" aria-describedby="priceHelp">
          @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input value="{{old('series')}}" type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" aria-describedby="seriesHelp" maxlength="60">
          @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input value="{{old('sale_date')}}" type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
          @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input value="{{old('type')}}" type="text" class="form-control @error('type') is-invalid @enderror" id="type" aria-describedby="typeHelp" maxlength="40" name="type">
          @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
