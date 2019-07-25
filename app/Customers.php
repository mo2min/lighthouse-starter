<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'name', 'debt', 'phone','address','notes','is_self'
    ];
}
