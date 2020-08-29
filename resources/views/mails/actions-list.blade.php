<div>
    <form action="{{ route('mails.destroy' , ['mail' => $id])}}" method="POST">
        @method('DELETE')
        @csrf

        <a href="{{ route('mails.send', ['mailId' => $id]) }}" class="btn btn-primary"> Send </a>

        <a href="{{ route('mails.show', ['mail' => $id]) }}" class="btn btn-dark"> Show </a>

        <a href="{{ route('mails.edit', ['mail' => $id]) }}" class="btn btn-warning"> Edit </a>

        <button type="submit" class="btn btn-danger"> Delete</button>
    </form>
</div>
