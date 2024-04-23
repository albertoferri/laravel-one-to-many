<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // instaurlo relazione tanti a uno (tanti progetti hanno un tipo)
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
