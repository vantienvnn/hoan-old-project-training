<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $fillable = [
        'content', 'category_id', 'audio'
    ];

    public function wordAnswers()
    {
        return $this->hasMany(WordAnswer::class);
    }

    public function correctWord()
    {
        return $this->hasOne(WordAnswer::class)->where('correct', 1);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
