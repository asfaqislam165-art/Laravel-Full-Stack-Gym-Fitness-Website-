<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Facility;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin Dashboard - Stats count korar jonno
    public function dashboard()
    {
        $trainerCount = Trainer::count();
        $facilityCount = Facility::count();
        $membershipCount = Membership::count();
        $userCount = User::where('usertype', 'user')->count();
        
        return view('admin.dashboard', compact('trainerCount', 'facilityCount', 'membershipCount', 'userCount'));
    }

    // Memberships list view show korar jonno
    public function memberships()
    {
        $memberships = Membership::latest()->get();
        return view('admin.memberships', compact('memberships'));
    }

    // Membership status update korar jonno (Pending -> Approved / Cancelled)
    public function updateMembershipStatus(Request $request, $id)
    {
        $membership = Membership::findOrFail($id);
        $membership->status = $request->status;
        $membership->save();

        return redirect()->back()->with('status', 'Membership status updated successfully!');
    }

    // Membership record delete korar jonno
    public function destroyMembership($id)
    {
        Membership::findOrFail($id)->delete();

        return redirect()->back()->with('status', 'Membership deleted successfully!');
    }
}