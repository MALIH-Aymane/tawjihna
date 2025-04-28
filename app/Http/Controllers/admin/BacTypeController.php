<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BacType;
use Illuminate\Http\Request;

class BacTypeController extends Controller
{
    public function index()
    {
        $bacTypes = BacType::latest()->paginate(10);
        return view('dashboard.pages.admin.options.bac-type-management', compact('bacTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_fr' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ]);

        BacType::create($request->only('name_fr', 'name_ar'));

        return redirect()->back()->with('success', 'Type de Bac ajouté avec succès.');
    }

    public function update(Request $request, BacType $bacType)
    {
        $request->validate([
            'name_fr' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ]);

        $bacType->update($request->only('name_fr', 'name_ar'));

        return redirect()->back()->with('success', 'Type de Bac mis à jour avec succès.');
    }

    public function destroy(BacType $bacType)
    {
        $bacType->delete();
        return redirect()->back()->with('success', 'Type de Bac supprimé.');
    }
}
