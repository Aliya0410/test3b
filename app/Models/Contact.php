<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function contacts(){
        $this->hasMany(Phone::class);
    }
}
