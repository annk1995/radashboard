<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        $id=Auth::user()->id;
        $profileData =User::find($id);
        return view ('admin.index',compact('profileData'));
    }
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function AdminLogin(){
        return view('admin.admin_login');
    }

    public function AdminProfile(){
       $id=Auth::user()->id;
       $profileData =User::find($id);
       return view('admin.admin_profile_view',compact('profileData'));
    }
    public function AdminProfileStore(Request $request){
        $id=Auth::user()->id;
        $data =User::find($id);
        $data ->username = $request ->username;

        // dd($data->name);

        // $data ->name = $request ->name;
         $data->name = $request->has('name') ? $request->name : null;
        $data ->email = $request ->email;
        $data ->phone = $request ->phone;
        $data ->address = $request ->address;
        // $data->name = $request->has('name') ? $request->name : null;

        if ($request -> file('photo')) {
           $file =$request ->file('photo');
           @unlink(public_path('upload/admin_images/'.$data ->photo));
           $filename=date('YmdHi').$file->getClientOriginalName();
           $file -> move(public_path('upload/admin_images'),$filename);
           $data['photo']=$filename;
        }
        $data -> save();
        $notification =array(
            'message'=>"Admin Profile updated successfully ",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function AdminChangePassword(){
        $id=Auth::user()->id;
       $profileData =User::find($id);
        return view('admin.admin_change_password',compact('profileData'));
    }
}
