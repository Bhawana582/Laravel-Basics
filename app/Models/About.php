<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class About extends Model
{
    use SoftDeletes;

     protected $fillable = [
        'title',
        'short_des',
        'long_des',
        'deleted_at'

    ];
}
