<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $garded = []; 

    protected $fillable = [
        'title',
        'sub_title',
        'home_slider',
        'Video_url',
    ];
}
