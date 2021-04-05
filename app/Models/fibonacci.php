<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fibonacci extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeros',
        'numeros_fibonacci'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
