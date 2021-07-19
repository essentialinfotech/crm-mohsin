<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use Session;

class AdminController extends Controller
{
    public function details()
    {


        return view('admin.details');
    }
      public function profile()
    {
        return view('admin.profile');
    }
   public function logout()
   {

    Session::flush();
     return redirect('/');
    
   }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function update(Request $request)
  {
    $admin_id = Auth::user()->id;
    $userDetails = User::find($admin_id );
    // echo "<pre>";print_r($userDetails);die;
    if ($request->isMethod('post') ) {

      $data = $request->all();

    $admin = User::find($admin_id);
    $admin->first_name = $data['first_name'];
    $admin->last_name = $data['last_name'];
    $admin->company_name = $data['company_name'];
    $admin->phone_number = $data['phone_number'];
    $admin->phone_number = $data['address'];


     if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename=rand(111,99999).'.'.$extension;
        $large_image_path = 'images/backend_images/contract/large/'.$filename;
        $medium_image_path = 'images/backend_images/contract/medium/'.$filename;
        $small_image_path = 'images/backend_images/contract/small/'.$filename;

        Image::make($image_tmp)->resize(600,600)->save($large_image_path);
        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
        Image::make($image_tmp)->resize(20,20)->save($small_image_path);
           $admin->image =$filename;
        }
        }
  
    $admin->save();
    return redirect()->route('admin.dashboard')->with('flash_message_success','Profile Update Successfully!!');
  }
  }

  public function register()
  {
   return view('auth.register');
  }
}
