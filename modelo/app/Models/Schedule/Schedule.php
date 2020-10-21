<?php

namespace App\Models\Schedule;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['local','type','name','contact','status'];
}
