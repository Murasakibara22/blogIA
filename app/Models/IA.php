<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IA extends Model
{
    use HasFactory;

    protected $fillable = [
     'nom',   
     'url_ia',   
     'theme',   
     'slug',   
    ];

    public function blog() {
        return $this->hasMany(Blog::class);
    }
}