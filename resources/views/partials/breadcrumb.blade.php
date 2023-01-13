<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if($link1 == 0)
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            @else
                <li class="breadcrumb-item"><a href="{{ route('comics.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $link1}}</li>
            @endif
        </ol>
    </nav>
</div>
