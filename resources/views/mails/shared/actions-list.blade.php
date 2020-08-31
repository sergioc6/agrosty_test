<div>
    <form action="{{ route('mails.destroy' , ['mail' => $id])}}" method="POST">
        @method('DELETE')
        @csrf

        <button type="button" class="btn btn-primary btnSend"><i class="fa fa-reply" aria-hidden="true"></i> Send</button>

        <a href="{{ route('mails.show', ['mail' => $id]) }}" class="btn btn-dark"><i class="fa fa-envelope-open" aria-hidden="true"></i> Show </a>

        <a href="{{ route('mails.edit', ['mail' => $id]) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit </a>

        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
    </form>
</div>
