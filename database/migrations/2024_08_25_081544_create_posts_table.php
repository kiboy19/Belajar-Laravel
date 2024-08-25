<?php

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->foreignId('author_id')->constrained(
                table: 'users',
                indexName: 'post_author_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'post_categories_id'
            );
            $table->String('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
