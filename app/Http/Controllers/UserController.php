<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Facility;
use App\Models\Membership;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    
    public function home(Request $request) {
        if ($request->user() && $request->user()->usertype === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        $trainers = Trainer::take(4)->get();
        $facilities = Facility::take(3)->get();
        return view('home', compact('trainers', 'facilities'));
    }

    public function index(Request $request) {
        if ($request->user() && $request->user()->usertype === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        $myMemberships = Membership::where('user_id', Auth::id())->latest()->get();
        return view('dashboard', compact('myMemberships'));
    }

    public function trainers() {
        return view('trainers', ['trainers' => Trainer::all()]);
    }

    public function facilities() {
        return view('facilities', ['facilities' => Facility::latest()->get()]);
    }

    public function services() {
        return view('services', ['services' => Service::latest()->get()]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function membershipForm() {
        return view('membership');
    }

    // Membership store korar main logic
    public function storeMembership(Request $request) {
        $request->validate([
            'member_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'package_type' => 'required|string',
            'start_date' => 'required|date|after_or_equal:today',
        ]);

        Membership::create([
            'user_id' => Auth::id(), // Login kora user-er ID save hobe
            'member_name' => $request->member_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'package_type' => $request->package_type,
            'start_date' => $request->start_date,
            'note' => $request->note,
            'status' => 'Pending', // Default status Pending thakbe jate admin approve korte pare
        ]);

        return redirect()->route('membership')->with('status', 'Membership request submitted successfully! Our team will contact you soon.');
    }
}