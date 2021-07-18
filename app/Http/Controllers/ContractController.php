<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ContractDetails;
use Image;
use PDF;
use Auth;
use APp\User;

class ContractController extends Controller
{
   public function index()
    {
      $admin_id = Auth::user()->id;
      
    //  echo "<pre>";print_r($admin_id);die;
      $bankDetails= ContractDetails::Where('user_id',$admin_id)->first();
//  echo "<pre>";print_r($bankDetails);die;
    return view('admin.bank-details',compact('bankDetails'));
    }
    public function insert(Request $request)
    {
      $admin_id = Auth::user()->id;
      
      //  echo "<pre>";print_r($admin_id);die;
        $bankDetails= ContractDetails::Where('user_id',$admin_id)->first();
    // echo"<pre>";print_r($bankDetails);die();
   
    	if ($request->isMethod('post')) {
       $data = $request->all();
   // echo "<pre";print_r(expression)
       $contract = new ContractDetails;
       $contract->name =$data['name'];
       $contract->account_name =$data['account_name'];
        $contract->account =$data['account'];
         $contract->b_name =$data['b_name'];
         $contract->user_id = Auth::user()->id;
  
       $contract->save();
       return redirect()->back()->with('flash_message_success',' Product add Successfully');
      }
         //return redirect()->back()->with('flash_message_success',' Product add Successfully');


    }

    public function show()
    {
      $admin_id = Auth::user()->id;
      $bankDetails= ContractDetails::where('user_id',$admin_id)->get();
     return view('admin.show_bank_details',compact('bankDetails'));
    }

}
