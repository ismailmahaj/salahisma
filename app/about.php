<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable = ["title", "name", "localisation", "description", "resume", "experience", "project"];
}
