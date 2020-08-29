<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'subject_id',
        'to',
        'from_name',
        'from_email',
        'body',
        'date',
        'spam_score',
    ];

    protected $dates = [
        'created_at',
    ];

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
