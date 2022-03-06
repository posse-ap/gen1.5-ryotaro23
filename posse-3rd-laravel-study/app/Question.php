<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // CRUD
    protected $fillable = [
        'question_number',
        'img',
        'name'
    ];

    public function choices()
    {
        return $this->hasMany('App\Choice');
        
    }
    public static $rules = [
        'name' => 'required|max: 30',
        'year' => 'required',
        'shot' => 'required|max: 50',
        'comment' => 'required|max: 1000',
        'profile_img' => 'image|file',
    ];
}
