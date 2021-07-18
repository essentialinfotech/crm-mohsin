<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculation;

class CalculationContrtoller extends Controller
{
    public function index()
    {
        return view('calculation.index');
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')){
            $data=$request->all();
            // echo"<pre>";print_r($data);die();
            $calculations = new Calculation;
            $calculations->area = $data['area'];
            $calculations->goods = $data['goods']; 
             $calculations->discount = $data['discount'];
             $calculations->travel_cost = $data['travel_cost'];
             $calculations->employee_cost = $data['employee_cost'];
             $calculations->profite = $data['profite'];
             $calculations->save();
             return back()->with('flash_message_success','Your calculation is add successfully');
        }
    }
    public function show()
    {
        $calculations = Calculation::get();
       return view('calculation.show',compact('calculations'));
    }
}
