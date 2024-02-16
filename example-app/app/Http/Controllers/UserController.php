<?php

namespace App\Http\Controllers;
use App\Models\Listing; // Assuming Listing model is in the correct namespace
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function UserDashboard(){
        $id=Auth::user()->id;
        $profileData =User::find($id);
        return view ('home',compact('profileData'));
    }
    public function home ()
    {
         $listings = Listing::orderBy('id')->get();
        return view('home', compact('listings'));

    }
    public function about ()
    {
        return view('about');
    }

}
