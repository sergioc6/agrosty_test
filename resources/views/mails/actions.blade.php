<div class="row">
    <a href="{{ route('mails.create') }}" class="btn btn-primary" role="button">+ Create new</a>

    <a href="{{ route('mails.list-group') }}" class="btn btn-primary" role="button">Lists by subject</a>

    <br>

</div>

<div class="row">
    <a href="{{ route('mails.index') }}?orderDesc=true" class="btn btn-dark" role="button">Order Date desc</a>

    <a href="{{ route('mails.index') }}?orderAsc=true" class="btn btn-dark" role="button">Order Date Asc</a>
</div>


<div class="row">
    <a href="{{ route('mails.pdf') }}" class="btn btn-success" role="button">Export to PDF</a>

    <a href="{{ route('mails.excel') }}" class="btn btn-success" role="button">Export to Excel</a>
</div>
