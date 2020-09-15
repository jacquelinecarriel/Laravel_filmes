<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filmeModel extends Model
{
    public $table = "movies";
    public $primaryKey = "id";
    public $timestamp = false;
    public $guarded = [];
}
