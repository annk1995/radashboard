<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    //
    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.listing', compact('profileData'));
    }
    public function Store(Request $request)
    {
        $path = $request->file('image')->store('listing', 'public');
        $listing = new Listing();
        $listing->name = $request->name;
        $listing->location = $request->location;
        $listing->image = $path;
        $listing->type = $request->type;
        $listing->rooms = $request->rooms;
        $listing->bathroom = $request->bathroom;
        $listing->area = $request->area;
        $listing->beds = $request->beds;
        $listing->user_id = Auth::user()->id;
        $listing->save();
        if($listing)
        {
            return redirect()->back();
        }
    }
}
