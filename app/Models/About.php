<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\AboutMultiImages;

class About extends Model
{
    use HasFactory;
    protected $garded = [];

    protected $fillable = [
        'title',
        'sub_title',
        'short_description',
        'long_description',
        'about_image',
         'order',
        'status'
    ];

    public function multi_image(){
        return $this->hasMany(AboutMultiImages::class);
    }
    
       
    
}

