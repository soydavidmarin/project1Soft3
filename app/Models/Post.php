<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'publication',
        'content_publication',
        'state_publication',
        'category_id'
    ];

    public function category(){
        /**relación uno a muchos (una categoria tiene muchas publicaciones) */
        return $this->belongsTo(Category::class);
    }
}
