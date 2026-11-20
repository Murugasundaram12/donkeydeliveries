<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $connection = 'donkey';
    protected $table = 'enquiry';

    protected $fillable = [
        'name',
        'mailId',
        'area',
        'mobile',
        'category',
        'pincode',
        'description',
        'ficon',
        'subscriberId',
        'emp_id',
    ];

    protected $casts = [
        'pincode' => 'array',
    ];
}
