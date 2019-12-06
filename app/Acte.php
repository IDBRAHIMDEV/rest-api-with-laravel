<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Acte extends Model
{
    function users() {
        return $this->belongsToMany(User::class);
    }
}
