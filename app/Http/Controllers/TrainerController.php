<?php
namespace App\Http\Controllers;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TrainerController extends Controller {
    public function index() {
        return view('admin.trainers.index', ['trainers' => Trainer::latest()->get()]);
    }

    public function create() {
        return view('admin.trainers.create');
    }

 public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'speciality' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable', // Image-er strict validation ekhon tule dilam, jate kono error na dey
        ]);

        $trainer = new Trainer($request->only(['name', 'speciality', 'phone', 'email', 'bio']));

        if ($request->hasFile('image')) {
            $imagename = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $trainer->image = $imagename;
        }

        $trainer->save();
        return redirect()->route('admin.trainers.index')->with('status', 'Trainer added successfully!');
    }

    public function edit($id) {
        return view('admin.trainers.edit', ['trainer' => Trainer::findOrFail($id)]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable',
        ]);

        $trainer = Trainer::findOrFail($id);
        $trainer->fill($request->only(['name', 'speciality', 'phone', 'email', 'bio']));

        if ($request->hasFile('image')) {
            if ($trainer->image && File::exists(public_path('img/'.$trainer->image))) {
                File::delete(public_path('img/'.$trainer->image));
            }
            $imagename = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $trainer->image = $imagename;
        }

        $trainer->save();
        return redirect()->route('admin.trainers.index')->with('status', 'Trainer updated successfully!');
    }

    public function destroy($id) {
        $trainer = Trainer::findOrFail($id);
        if ($trainer->image && File::exists(public_path('img/'.$trainer->image))) {
            File::delete(public_path('img/'.$trainer->image));
        }
        $trainer->delete();
        return redirect()->route('admin.trainers.index')->with('status', 'Trainer deleted successfully!');
    }

    
}