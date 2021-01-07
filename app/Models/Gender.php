<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Gender extends Model
{
    protected $fillable = ['name'];


    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
    public function movies(){
        return $this->hasMany('App\Models\Movie');
    }

}
