<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');                          // Titre de l'article
            $table->string('slug')->unique();                 // Slug URL unique
            $table->text('excerpt')->nullable();              // Résumé optionnel
            $table->longText('content');                      // Contenu principal
            $table->string('featured_image')->nullable();     // Image principale (uploadée)
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Etat de publication
            $table->timestamp('published_at')->nullable();    // Date de publication
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Auteur (lié à users)
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null'); // Catégorie (simple)

            // Champs SEO
            $table->string('meta_title')->nullable();         // Titre SEO
            $table->string('meta_description')->nullable();   // Description SEO
            $table->string('meta_keywords')->nullable();      // Mots clés SEO

            $table->timestamps();                             // created_at / updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
