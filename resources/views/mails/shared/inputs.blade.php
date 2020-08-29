@csrf

<div class="form-group">
    <label for="pwd">To email:</label>
    <input required type="email" class="form-control" name="to" value="{{ isset($mail) ? $mail->to : '' }}">
</div>
<div class="form-group">
    <label for="pwd">Subject:</label>
    <input type="text" class="form-control" name="subject" value="{{ isset($mail) ? $mail->subject : '' }}">
</div>
<div class="form-group">
    <label for="pwd">Body:</label>
    <textarea required class="form-control" style="resize: none" rows="5" name="body">{{ isset($mail) ? $mail->body : '' }}</textarea>
</div>

@if(isset($mail))
    <button type="submit" class="btn btn-warning">Edit</button>
@else
    <button type="submit" class="btn btn-primary">Create</button>
@endif
<a href="{{ route('mails.index') }}" class="btn btn-default">Go Back</a>
