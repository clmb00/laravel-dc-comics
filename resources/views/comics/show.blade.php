@extends('layouts.main')

@include('partials.breadcrumb', ['link1'=>"Comic - $comic->id"])

@section('content')
<div class="container">
    <div class="d-flex justify-between align-items-center">
        <h1>{{ $comic->title }} - #{{ $comic->id }}</h1>
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning ms-auto p-3"><i class="fa-solid fa-pen"></i></a>
    </div>
    <h5>{{ $comic->series }}</h5>
    <p>{{ $comic->description}}</p>
    <div class="text-center">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 100%; max-height: 500px;">
    </div>
    <p><strong>Price:</strong> {{ $comic->price }}</p>
    <p><strong>Type:</strong> {{ $comic->type }}</p>
    <p><strong>Date of sales:</strong> {{ $comic->sale_date }}</p>
    <p class="text-muted mt-5">{{ $comic->slug }} / {{ $comic->created_at}} / {{ $comic->updated_at }}</p>
    <a href="{{ route('comics.index') }}" class="btn btn-primary mb-5">Back</a>
</div>
@endsection
