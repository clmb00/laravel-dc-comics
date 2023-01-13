<form action="{{ route('comics.destroy', $comic) }}" method="POST" onsubmit="return confirm('Confermi l\'eliminazione di: {{$comic->title}} ?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger my_btn" title="delete"><i class="fa-solid fa-trash"></i></button>
</form>
