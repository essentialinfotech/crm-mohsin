<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use Image;
use PDF;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
    	$levels = Category::where(['parent_id'=>0])->get();
      $categories = Category::get();
      if($request->has('download')){
            $pdf = PDF::loadView('category.index');
            return $pdf->download('category.index.pdf');
        }
    return view('category.index',compact('levels','categories'));
    }
    public function insert(Request $request)
    {
    	if ($request->isMethod('post')) {
       $data = $request->all();
   // echo "<pre";print_r(expression)
       $categories = new Category;
       $categories->name =$data['name'];
       $categories->parent_id =$data['parent_id'];
         $categories->slug = Str::slug($request->name);
       //upload Image
        if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename=rand(111,99999).'.'.$extension;
        $large_image_path = 'images/backend_images/categories/large/'.$filename;
        $medium_image_path = 'images/backend_images/categories/medium/'.$filename;
        $small_image_path = 'images/backend_images/categories/small/'.$filename;

        Image::make($image_tmp)->resize(600,600)->save($large_image_path);
        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
        Image::make($image_tmp)->resize(20,20)->save($small_image_path);
           $categories->image =$filename;
        }
        }
  
       $categories->save();
       return redirect()->back()->with('flash_message_success',' Product add Successfully');
         //return redirect()->back()->with('flash_message_success',' Product add Successfully');
}


    }

    
  
}
