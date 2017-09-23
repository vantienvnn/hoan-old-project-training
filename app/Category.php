<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name', 'description'
    ];

    public function words()
    {
        return $this->hasMany(Word::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
