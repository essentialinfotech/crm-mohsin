<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Calculation;
use Hash;

class UsersController extends Controller
{
    public function index()
    {
        $calculations=Calculation::get();

        return view('user.add',compact('calculations'));
    }

    public function insert(Request $request)
    {
        if($request->method('post')){
            $data = $request->all();
            // echo"<pre>";print_r($data);die();
            $users = new User;
            $users->email=$data['email'];
            $users->password =Hash::make($data['password']);
            $users->area = $data['area'];
            $users->goods = $data['goods']; 
             $users->discount = $data['discount'];
             $users->travel_cost = $data['travel_cost'];
             $users->employee_cost = $data['employee_cost'];
             $users->profite = $data['profite'];
             $users->save();
             return back();
        }
       
    }
   public function show()
   {
       $users=User::get();
       return view('user.show',compact('users'));
   }
}
