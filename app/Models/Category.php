<?php

namespace App\Models;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=["name"];
    
    public function beers(){
        return $this->belongsToMany(Beer::class);
    }
}
