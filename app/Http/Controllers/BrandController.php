<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Brand;
use Image;

class BrandController extends Controller
{
     public function index()
    {
    	$brands = Brand::get();
    return view('brand.index',compact('brands'));
    }
    public function insert(Request $request)
    {
    	if ($request->isMethod('post')) {
       $data = $request->all();
   // echo "<pre";print_r(expression)
       $brands = new Brand;
       $brands->name =$data['name'];
        $brands->slug = Str::slug($request->name);
       //upload Image
        if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename=rand(111,99999).'.'.$extension;
        $large_image_path = 'images/backend_images/brands/large/'.$filename;
        $medium_image_path = 'images/backend_images/brands/medium/'.$filename;
        $small_image_path = 'images/backend_images/brands/small/'.$filename;

        Image::make($image_tmp)->resize(600,600)->save($large_image_path);
        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
        Image::make($image_tmp)->resize(20,20)->save($small_image_path);
           $brands->image =$filename;
        }
        }
  
       $brands->save();
       return redirect()->back()->with('flash_message_success',' Product add Successfully');
         //return redirect()->back()->with('flash_message_success',' Product add Successfully');
}


    }
}
