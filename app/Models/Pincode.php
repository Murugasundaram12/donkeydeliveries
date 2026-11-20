<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    use HasFactory;

    protected $connection = 'donkey';
    protected $table = 'pincode';

    protected $fillable = [
        'state',
        'district',
        'city',
        'taluk',
        'pincode',
        'usedBy',
    ];
}
