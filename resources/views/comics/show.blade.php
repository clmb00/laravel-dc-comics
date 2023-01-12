@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $comic->title }} - #{{ $comic->id }}</h1>
    <h5>{{ $comic->series }}</h5>
    <p>{{ $comic->description}}</p>
    <div class="text-center">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 100%; max-height: 500px;">
    </div>
    <p><strong>Price:</strong> {{ $comic->price }}</p>
    <p><strong>Type:</strong> {{ $comic->type }}</p>
    <p><strong>Date of sales:</strong> {{ $comic->sale_date }}</p>
    <p class="text-muted mt-5">{{ $comic->slug }} / {{ $comic->created_at}} / {{ $comic->updated_at }}</p>
    <div class="text-end">
        <a href="{{ route('comics.index') }}" class="btn btn-primary fs-4">Back</a>
    </div>
</div>
@endsection
