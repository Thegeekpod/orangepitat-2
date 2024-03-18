<?php

namespace App\Http\Controllers\admin\location;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('admin.location.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

   // In LocationController.php
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'title' => 'required|string|max:255',
           'location' => 'required|string|max:255',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
   
       // Generate a base slug from the title
       $baseSlug = Str::slug($validatedData['title']);
   
       // Check if the base slug already exists
       $count = Location::where('slug', $baseSlug)->count();
       $slug = $baseSlug;
       $i = 1;
   
       // If the base slug already exists, append a number to it
       while ($count > 0) {
           $slug = $baseSlug . '-' . $i;
           $count = Location::where('slug', $slug)->count();
           $i++;
       }
   
       // Process and save the data
       $location = new Location;
       $location->title = $validatedData['title'];
       $location->location = $validatedData['location'];
       $location->slug = $slug;
       // Handle image upload
       if ($request->hasFile('image')) {
           $image = $request->file('image');
           $imageName = time().'.'.$image->extension();
           $image->move(public_path('images'), $imageName);
           $location->image = 'images/' . $imageName;
       }
   
       // Save the data
       $location->save();
       session::flash('msg', 'Location created successfully');
       return redirect()->route('location.index')->with('success', 'Location created successfully');
   }



    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    public function edit(Location $location)
    {
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
    
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Generate a base slug from the title
        $baseSlug = Str::slug($validatedData['title']);
    
        // Check if the base slug already exists
        $count = Location::where('slug', $baseSlug)->where('id', '!=', $id)->count();
        $slug = $baseSlug;
        $i = 1;
    
        // If the base slug already exists, append a number to it
        while ($count > 0) {
            $slug = $baseSlug . '-' . $i;
            $count = Location::where('slug', $slug)->where('id', '!=', $id)->count();
            $i++;
        }
    
        // Update location data
        $location->title = $validatedData['title'];
        $location->location = $validatedData['location'];
        // Handle image update if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $location->image = 'images/' . $imageName;
        }
    
        // Update slug
        $location->slug = $slug;
    
        // Save the updated data
        $location->save();
        session::flash('msg', 'Location updated successfully');
        return redirect()->route('location.index')->with('success', 'Location updated successfully');
    }
    public function destroy($slug)
{
    $location = Location::where('slug', $slug)->firstOrFail();
    // Delete the location
    $location->delete();
    session::flash('msg', 'Location deleted successfully');
    return redirect()->route('location.index')->with('success', 'Location deleted successfully');
}
}
