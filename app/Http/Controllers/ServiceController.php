<?php
namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller {
    public function index() {
        return view('admin.services.index', ['services' => Service::latest()->get()]);
    }

    public function create() {
        return view('admin.services.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $service = new Service($request->only(['title', 'description', 'price']));

        if ($request->hasFile('image')) {
            $imagename = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $service->image = $imagename;
        }

        $service->save();
        return redirect()->route('admin.services.index')->with('status', 'Service added successfully!');
    }

    public function edit($id) {
        return view('admin.services.edit', ['service' => Service::findOrFail($id)]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $service = Service::findOrFail($id);
        
        // Price ebong baki field gulo update korar jonno price add kora holo
        $service->fill($request->only(['title', 'description', 'price']));

        if ($request->hasFile('image')) {
            if ($service->image && File::exists(public_path('img/'.$service->image))) {
                File::delete(public_path('img/'.$service->image));
            }
            $imagename = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $service->image = $imagename;
        }

        $service->save();
        return redirect()->route('admin.services.index')->with('status', 'Service updated successfully!');
    }

    public function destroy($id) {
        $service = Service::findOrFail($id);
        if ($service->image && File::exists(public_path('img/'.$service->image))) {
            File::delete(public_path('img/'.$service->image));
        }
        $service->delete();
        return redirect()->route('admin.services.index')->with('status', 'Service deleted successfully!');
    }
}