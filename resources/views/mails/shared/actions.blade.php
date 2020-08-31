<div class="row">
    <div class="col-4">
        <a href="{{ route('mails.create') }}" class="btn btn-primary" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Create new</a>

        <a href="{{ route('mails.list-group') }}" class="btn btn-primary" role="button"><i class="fa fa-list" aria-hidden="true"></i> Lists by subject</a>
    </div>

    <div class="col-4">
        <a href="{{ route('mails.index') }}?orderDesc=true" class="btn btn-dark" role="button"><i class="fa fa-sort-desc" aria-hidden="true"></i> Order Date desc</a>

        <a href="{{ route('mails.index') }}?orderAsc=true" class="btn btn-dark" role="button"><i class="fa fa-sort-asc" aria-hidden="true"></i> Order Date Asc</a>
    </div>


    <div class="col-4">
        <a href="{{ route('mails.pdf') }}" class="btn btn-success" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export to PDF</a>

        <a href="{{ route('mails.excel') }}" class="btn btn-success" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export to Excel</a>
    </div>
</div>

