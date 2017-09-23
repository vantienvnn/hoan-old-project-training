<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnedWord extends Model
{
    protected $fillable = [
        'lesson_id', 'word_answer_id', 'learned_time'
    ];
    public function wordAnswer()
    {
        return $this->hasOne(WordAnswer::class);
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
