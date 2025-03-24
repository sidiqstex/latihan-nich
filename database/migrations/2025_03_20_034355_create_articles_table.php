<?php

use App\Models\ArticleCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('thumbnail');
            // $table->foreignId('article_category_id')->constrained();
            // $table->unsignedBigInteger('article_category_id');
            // $table->foreign('article_category_id')->references('id')->on('article_categories');
            $table->foreignIdFor(ArticleCategory::class, 'category_id')->constrained('article_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
