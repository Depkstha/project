<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.slider.all', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.slider.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
        }
        Slider::create($validatedData);
        toastr()->success('Slider has been saved successfully!');
        return redirect()->route('slider.index');
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
        $slider = Slider::find($id);
        return view('admin.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image')) {
            if (file_exists($slider->image)) {
                unlink($slider->image);
            }
            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
        }
        $slider->update($validatedData);
        toastr()->success('Slider has been updated successfully!');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        if (file_exists($slider->image)) {
            unlink($slider->image);
        };
        $slider->delete();
        toastr()->success('Slider has been deleted successfully!');
        return redirect()->back();
    }
}
