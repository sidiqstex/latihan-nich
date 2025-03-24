<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
    public function articleCategories()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }
}
