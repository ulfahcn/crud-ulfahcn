<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $table = 'dress';

    protected $fillable = [
        'merk', 'color', 'size', 'description'
    ];
}
