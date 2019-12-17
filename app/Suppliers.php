<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suppliers extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'total_count','balance', 'phone','address','notes','is_self'
    ];
}
