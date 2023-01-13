@extends('layouts.main')

@include('partials.breadcrumb', ['link1'=>0])

@section('content')
    <div class="container">
        <h1 class="mb-4">Comics</h1>

        @if(session('deleted'))
            <div class="alert alert-info" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

        <a href="{{ route('comics.create') }}" class="btn btn-success mb-2">Add New Comic</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td><div class="my_description">{{ $comic->description }}</div></td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary my_btn"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning my_btn"><i class="fa-solid fa-pen"></i></a>
                            @include('partials.form_delete', compact('comic'))
                        </td>
                    </tr>
                @empty
                    <h2>No result.</h2>
                @endforelse
            </tbody>
        </table>

        {{ $comics->links() }}
    </div>
@endsection
