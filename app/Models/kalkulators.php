<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalkulators extends Model
{
    use HasFactory;

    protected $fillable = [
        'komoditas',
        'varietas',
        'jarak',
        'luas',
        'date',
    ];
}
