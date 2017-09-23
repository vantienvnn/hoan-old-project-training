<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordAnswer extends Model
{
    //
    protected $fillable = [
        'content', 'word_id', 'correct'
    ];
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
