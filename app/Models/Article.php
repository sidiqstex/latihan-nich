<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
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

    public function scopeLeftJoinArticleCategory(Builder $query)
    {
        $query->selectRaw('articles.title,articles.description,article_categories.title as category_title')
            ->leftJoin('article_categories',  'articles.category_id', 'article_categories.id');
    }
}
