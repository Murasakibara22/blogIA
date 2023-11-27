<?php

namespace App\Models;

use App\Models\IA;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
      'titre',  
      'secteur_activity',  
      'description',  
      'image',  
      'slug',  
      'user_id',  
      'ia_id',  
    ];

    public function user()  {
        return $this->belongsTo(User::class);
    }
    
    public function intelligenceArt()  {
        return $this->belongsTo(IA::class);
    }

    public function commentaire()  {
        return $this->hasMany(Commentaire::class);
    }
}