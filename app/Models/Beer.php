<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Beer extends Model
{
    protected $fillable = ["name", "brewery", "style", "info", "img", "user_id"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
