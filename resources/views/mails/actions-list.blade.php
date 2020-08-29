<div>
    <a href="{{ route('mails.show', ['mail' => $id]) }}" class="btn btn-dark"> Show </a>

    <a href="{{ route('mails.edit', ['mail' => $id]) }}" class="btn btn-warning"> Edit </a>

    <form action="{{ route('mails.destroy' , ['mail' => $id])}}" method="POST" class="form-inline">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger"> Delete</button>
    </form>
</div>
