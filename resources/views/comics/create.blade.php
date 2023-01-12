@extends('layouts.main')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('comics.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="container">
    <h1>Create a new comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="inputTitle" class="form-label">Title</label>
          <input type="text" class="form-control" name="inputTitle" id="inputTitle" aria-describedby="titleHelp" maxlength="60">
          <div id="titleHelp" class="form-text">Max length 60 char.</div>
        </div>
        <div class="mb-3">
          <label for="inputDescription" class="form-label">Description</label>
          <input type="text" class="form-control" name="inputDescription" id="inputDescription">
        </div>
        <div class="mb-3">
          <label for="inputThumb" class="form-label">Thumbnail</label>
          <input type="text" class="form-control" name="inputThumb" id="inputThumb">
        </div>
        <div class="mb-3">
          <label for="inputPrice" class="form-label">Price</label>
          <input type="number" step=".01" min="0" class="form-control" id="inputPrice" name="inputPrice" aria-describedby="priceHelp">
          <div id="priceHelp" class="form-text">Two decimals.</div>
        </div>
        <div class="mb-3">
          <label for="inputSeries" class="form-label">Series</label>
          <input type="text" class="form-control" id="inputSeries" name="inputSeries" aria-describedby="seriesHelp" maxlength="60">
          <div id="seriesHelp" class="form-text">Max length 60 char.</div>
        </div>
        <div class="mb-3">
          <label for="inputDate" class="form-label">Sale Date</label>
          <input type="date" class="form-control" id="inputDate" name="inputDate">
        </div>
        <div class="mb-3">
          <label for="inputType" class="form-label">Type</label>
          <input type="text" class="form-control" id="inputType" aria-describedby="typeHelp" maxlength="40" name="inputType">
          <div id="typeHelp" class="form-text">Max length 40 char.</div>
        </div>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
