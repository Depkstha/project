<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_published',
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
