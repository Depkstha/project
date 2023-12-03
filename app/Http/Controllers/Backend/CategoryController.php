<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('admin.categories.all', [
            'categories' => $categories,
            'title' => 'category',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories',
        ]);

        $category = Category::create(
            [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'is_published' => $request->is_published,
            ]);

        $category->subcategories()->attach($request->subcategories);
        toastr()->success('Category has been created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories',
        ]);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'is_published' => $request->is_published,
        ]);

        $category->subcategories()->sync($request->subcategories);
        toastr()->success('Category has been updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->subcategories()->detach();
        $category->articles()->detach();
        $category->delete();
        toastr()->success('Data has been deleted!');
        return redirect()->back();
    }
}
