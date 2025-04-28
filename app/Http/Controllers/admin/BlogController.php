<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function createBlogIndex(){
        return view('dashboard.pages.admin.blog.blog-create');
    }

    public function store(Request $request)
    {
        // Validation des champs
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'excerpt'           => 'nullable|string|max:500',
            'content'           => 'required|string',
            'featured_image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096', // max 4MB
            'category_id'       => 'required|exists:categories,id',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:255',
            'meta_keywords'     => 'nullable|string|max:255',
            'status'            => 'required|in:draft,published,archived',
        ]);

        // Gérer l'upload de l'image
        $featuredImagePath = null;
        if ($request->hasFile('featured_image')) {
            $featuredImagePath = $request->file('featured_image')->store('blog_images', 'public');
        }

        // Créer l'article
        BlogPost::create([
            'title'             => $validated['title'],
            'slug'              => Str::slug($validated['title']),
            'excerpt'           => $validated['excerpt'] ?? null,
            'content'           => $validated['content'],
            'featured_image'    => $featuredImagePath,
            'category_id'       => $validated['category_id'],
            'meta_title'        => $validated['meta_title'] ?? null,
            'meta_description'  => $validated['meta_description'] ?? null,
            'meta_keywords'     => $validated['meta_keywords'] ?? null,
            'status'            => $validated['status'],
            'published_at'      => $validated['status'] === 'published' ? now() : null,
            'user_id'           => auth()->id(),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Article créé avec succès.');
    }

    public function index(Request $request)
    {
        $query = BlogPost::query();

        // Appliquer le filtre sur le statut si sélectionné
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $blogs = $query->latest()->paginate(12);

        return view('dashboard.pages.admin.blog.blog-list', compact('blogs'));
    }


    public function destroy($id)
    {
        // Trouver le blog
        $blog = BlogPost::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if ($blog->featured_image && Storage::exists($blog->featured_image)) {
            Storage::delete($blog->featured_image);
        }

        // Supprimer le blog
        $blog->delete();

        // Redirection avec message de succès
        return redirect()->route('admin.blog.index')
            ->with('success', 'Article supprimé avec succès.');
    }
}
