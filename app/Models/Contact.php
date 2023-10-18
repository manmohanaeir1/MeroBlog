<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $garded = [];
    
    protected $fillable  = [
        'name',
        'address',
        'email',
        'number',
        'message'   
    ];
}
