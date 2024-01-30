<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

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

        $data ->name = $request ->name;
        //  $data->name = $request->has('name') ? $request->name : null;
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
    public function AdminUpdatePassword(Request $request){
        //validation
        $request -> validate([
            'old_password' => 'required',
            'new_password' =>'required|confirmed'


        ]);
        //match te old password
        if (!Hash::check($request->old_password,auth::user()-> password)){

            $notification =array(
                'message'=>'old password does not match',
                'alert-type'=>"error"
            );
            return back()->with($notification);

        };
        //update the neew password
        User::findOrFail(auth()->user()->id)->update([
            'password'=>Hash::make($request->new_password)
        ]);
        $notification =array(
            'message'=>'password changed successfully',
            'alert-type'=>"success"
        );
        return back()->with($notification);


    }
}
