<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'skill', 'git_url'];

    // aggiungiamo la possibilità di leggere le tabelle a lui collegate
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
