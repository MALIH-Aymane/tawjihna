<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');                // Nom de la catégorie
            $table->string('slug')->unique();       // Slug URL SEO
            $table->text('description')->nullable(); // Description longue (facultatif pour SEO)
            $table->string('meta_title')->nullable(); // SEO meta title
            $table->string('meta_description')->nullable(); // SEO meta description
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
