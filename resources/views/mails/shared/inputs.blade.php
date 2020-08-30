@csrf

<div class="form-group">
    <label for="pwd">Nombre:</label>
    <input required type="text" class="form-control" name="from_name" value="{{ isset($mail) ? $mail->from_name : '' }}">
</div>

<div class="form-group">
    <label for="pwd">Email:</label>
    <input required type="email" class="form-control" name="from_email" value="{{ isset($mail) ? $mail->from_email : '' }}">
</div>

<div class="form-group">
    <label for="pwd">Subject:</label>
    <div class="form-group">
        <select class="form-control" name="subject_id">
            @if (!isset($mail))
                @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->desc }}</option>
                @endforeach
            @else
                @foreach($subjects as $subject)
                    @if($mail->subject_id == $subject->id)
                        <option selected value="{{ $subject->id }}">{{ $subject->desc }}</option>
                    @else
                        <option value="{{ $subject->id }}">{{ $subject->desc }}</option>
                    @endif
                @endforeach
            @endif
        </select>
    </div>
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
<a href="{{ route('mails.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Go back</a>
