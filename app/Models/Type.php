<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Type extends Model
{
    use HasFactory;

    public function projects(){
        $this->hasMany(Project::class);
    }
}