<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // Liste des catégories
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('dashboard.pages.admin.blog.category-management', compact('categories'));
    }

    // Stocker une nouvelle catégorie
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
        ]);

        return redirect()->back()->with('success', 'Catégorie créée avec succès.');
    }

    // Mettre à jour une catégorie existante
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
        ]);

        return redirect()->back()->with('success', 'Catégorie mise à jour avec succès.');
    }

    // Supprimer une catégorie
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success', 'Catégorie supprimée avec succès.');
    }
}
