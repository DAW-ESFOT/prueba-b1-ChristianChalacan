<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'code',
        'year',
        'available',
    ];

    public function genders(){
        return $this->belongsTo('App\Models\Gender');
    }

}
