<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.pages.gallery.all', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.gallery.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
        }
        Gallery::create($validatedData);
        toastr()->success('Gallery has been saved successfully!');
        return redirect()->route('gallery.index');
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
        $gallery = Gallery::find($id);
        return view('admin.pages.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image')) {
            if (file_exists($gallery->image)) {
                unlink($gallery->image);
            }
            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
        }
        $gallery->update($validatedData);
        toastr()->success('Gallery has been updated!');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);
        if (file_exists($gallery->image)) {
            unlink($gallery->image);
        };
        $gallery->delete();
        toastr()->success('Gallery has been deleted successfully!');
        return redirect()->back();
    }
}
