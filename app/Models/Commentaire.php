<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'nom_comment',
        'slug',
        'user_id',
        'blog_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    public function user()  {
        return $this->belongsTo(User::class);
    }
    
    public function blog()  {
        return $this->belongsTo(Blog::class);
    }
}