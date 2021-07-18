<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            echo"<pre>";print_r($data);die();
        }
    }
}
