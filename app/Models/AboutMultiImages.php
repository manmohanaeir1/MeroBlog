<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use App\Models\About;
class AboutMultiImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'images',
        'about_id',
    ];

    public function abouts(){
        return $this->belongsTo(About::class);
    }
}



