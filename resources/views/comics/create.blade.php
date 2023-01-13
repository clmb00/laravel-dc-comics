@extends('layouts.main')

@include('partials.breadcrumb', ['link1'=>'Create'])

@section('content')
<div class="container">
    <h1>Create a new comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" maxlength="60">
          <div id="titleHelp" class="form-text">Max length 60 char.</div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Thumbnail</label>
          <input type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" step=".01" min="0" class="form-control" id="price" name="price" aria-describedby="priceHelp">
          <div id="priceHelp" class="form-text">Two decimals.</div>
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" id="series" name="series" aria-describedby="seriesHelp" maxlength="60">
          <div id="seriesHelp" class="form-text">Max length 60 char.</div>
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" class="form-control" id="type" aria-describedby="typeHelp" maxlength="40" name="type">
          <div id="typeHelp" class="form-text">Max length 40 char.</div>
        </div>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
