<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteView extends Model
{
    protected $fillable = ['count'];
    public $timestamps = false; // We don't really need timestamps for a single-row counter
}
