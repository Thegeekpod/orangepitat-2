<?php

namespace App\Http\Controllers\admin\packages;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Package;
use App\Models\TourPlan;
use Illuminate\Http\Request;
use Purifier;

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

    public function day_add($id)
    {
        $data['packge_id'] = $id;

        return view('admin.tour_plan.add', $data);
    }

    public function day_store(Request $request)
    {
        $request->validate(
            [
                'package_id' => 'required|integer|exists:packages,id',
                'day' => 'required|integer|min:1',
                'plan_name' => 'required',
                'plan_details' => 'required|string',
            ],
            [
                'package_id.required' => 'The package ID is required.',
                'plan_name.required'  => 'The plan name is required',  
                'package_id.integer' => 'The package ID must be an integer.',
                'package_id.exists' => 'The selected package does not exist.',
                'day.required' => 'The day is required.',
                'day.integer' => 'The day must be an integer.',
                'day.min' => 'The day must be at least 1.',
                'plan_details.required' => 'The plan details are required.',
                'plan_details.string' => 'The plan details must be a string.',
            ]
        );


        $input = array();

        $input['package_id'] = $request->package_id;
        $input['day'] = $request->day;
        $input['plan_name'] = $request->plan_name;
        $input['plan_details'] = $request->plan_details;

        TourPlan::create($input);

        return redirect()->route('tour.plans', ['id' => $request->package_id])->with('success', 'Plan added successfully!');
    }

    public function day_edit($id){
        $tour_plan = TourPlan::findOrFail($id);
        return view('admin.tour_plans.edit',$tour_plan);
    }

    public function day_update(Request $request,$id){
        $request->validate(
            [
                'day' => 'required|integer|min:1',
                'plan_name' => 'required',
                'plan_details' => 'required|string',
            ],
            [
                'plan_name.required'  => 'The plan name is required',  
                'day.required' => 'The day is required.',
                'day.integer' => 'The day must be an integer.',
                'day.min' => 'The day must be at least 1.',
                'plan_details.required' => 'The plan details are required.',
                'plan_details.string' => 'The plan details must be a string.',
            ]
        );


        $input = array();

        $input['day'] = $request->day;
        $input['plan_name'] = $request->plan_name;
        $input['plan_details'] = $request->plan_details;

        $tourPlan = TourPlan::findOrFail($id);
        $tourPlan->update($input);

        return redirect()->route('tour.plans', ['id' => $tourPlan->package_id])->with('success', 'Plan updated successfully!');
    }

    public function tour_plans($id){
        $data['plans'] = TourPlan::where('package_id',$id)->get();
        $data['package_id'] = $id;
        // dd($data['plans']);
        return view('admin.tour_plan.index',$data);
    }
}
