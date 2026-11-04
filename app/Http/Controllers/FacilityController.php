<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacilityController extends Controller
{
    // Admin panel-e facilities list dekhanor jonno
    public function index()
    {
        $facilities = Facility::latest()->get();
        return view('admin.facilities', compact('facilities'));
    }

    // Notun facility add korar form dekhanor jonno
    public function create()
    {
        return view('admin.add-facility');
    }

    // Notun facility database-e store korar jonno
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $facility = new Facility();
        $facility->title = $request->title;
        $facility->description = $request->description;

        if ($request->hasFile('image')) {
            $imagename = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $facility->image = $imagename;
        }

        $facility->save();

        return redirect()->route('admin.facilities.index')->with('status', 'Facility added successfully!');
    }

    // Facility edit korar form dekhanor jonno
    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.update-facility', compact('facility'));
    }

    // Facility update korar jonno
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $facility = Facility::findOrFail($id);
        $facility->title = $request->title;
        $facility->description = $request->description;

        if ($request->hasFile('image')) {
            // Purono image thakle ta folder theke delete kore dewa
            if ($facility->image && File::exists(public_path('img/'.$facility->image))) {
                File::delete(public_path('img/'.$facility->image));
            }

            $imagename = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $facility->image = $imagename;
        }

        $facility->save();

        return redirect()->route('admin.facilities.index')->with('status', 'Facility updated successfully!');
    }

    // Facility delete korar jonno
    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);

        // Image file-o folder theke delete kore dewa
        if ($facility->image && File::exists(public_path('img/'.$facility->image))) {
            File::delete(public_path('img/'.$facility->image));
        }

        $facility->delete();

        return redirect()->route('admin.facilities.index')->with('status', 'Facility deleted successfully!');
    }
}