<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bean extends Model
{
    use HasFactory;

    protected $table = 'beans';

    protected $fillable = [
        'bean',
        'description',
        'price',
    ];
}
