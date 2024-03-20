<?php

namespace App\Http\Controllers\admin\packages;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['locations'] = Location::all(array('id', 'title'));
        // dd($data['locations']);
        return view("admin.packages.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'included' => 'required|string',
            'excluded' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = array();
        $input['location_id'] = $request->location_id;
        $input['name'] = $request->name;
        $input['price'] = $request->price;
        $input['duration'] = $request->duration;
        $input['address'] = $request->location;
        $input['description'] = $request->description;
        $input['included'] = $request->included;
        $input['excluded'] = $request->excluded;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $input['image'] = 'images/' . $imageName;
        }

        Package::create($input);
        return redirect()->route('package.index')->with('success', 'Package added successfully !');
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
        $data['package'] = Package::findOrFail($id);
        $data['locations'] = Location::all(array('id', 'title'));
        return view("admin.packages.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $package = Package::findOrFail($id);

        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'included' => 'required|string',
            'excluded' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = array();
        $input['location_id'] = $request->location_id;
        $input['name'] = $request->name;
        $input['price'] = $request->price;
        $input['duration'] = $request->duration;
        $input['address'] = $request->location;
        $input['description'] = $request->description;
        $input['included'] = $request->included;
        $input['excluded'] = $request->excluded;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $input['image'] = 'images/' . $imageName;
        }

        $package->update($input);

        return redirect()->route('package.index')->with('success', 'Package updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::where('id', $id)->firstOrFail();
        // Delete the package
        $package->delete();
        session::flash('msg', 'Package deleted successfully');
        return redirect()->route('package.index')->with('success', 'package deleted successfully');
    }
}
