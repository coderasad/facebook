<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class victim extends Model
{
    use HasFactory;
    protected $fillable = [
        'victim_name',
        'password',
        'fnd_name',
    ];
}
