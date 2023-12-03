<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.pages.services.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.services.new');
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
        $validatedData['is_published'] = $request->is_published;
        Service::create($validatedData);
        toastr()->success('Service has been saved!');
        return redirect()->route('services.index');
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
        $service = Service::find($id);
        return view('admin.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image')) {
            if (file_exists($service->image)) {
                unlink($service->image);
            }
            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
            $validatedData['is_published'] = $request->is_published;
        }
        $service->update($validatedData);
        toastr()->success('Service has been updated successfully!');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        if (file_exists($service->image)) {
            unlink($service->image);
        };
        $service->delete();
        toastr()->success('Service has been deleted successfully!');
        return redirect()->back();
    }
}
