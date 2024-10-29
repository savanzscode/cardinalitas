<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search'); // Ambil query pencarian dari request

        if ($query) {
            $categories = Category::where('name', 'like', "%{$query}%")->get();
        } else {
            $categories = Category::all();
        }

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit($id)
{
    $category = Category::find($id); // Gunakan find() untuk pengecekan
    if (!$category) {
        abort(404, 'Category not found'); // Tampilkan pesan error jika kategori tidak ditemukan
    }

    return view('categories.edit', compact('category'));
}
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $category = Category::findOrFail($id);
    $category->update([
        'name' => $request->name,
    ]);

    return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
}

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}