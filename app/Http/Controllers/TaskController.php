<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use PDF;

class TaskController extends Controller
{
    public function index()
    {

    	$users= User::get();
    	return view('task.create',compact('users'));
    }


public function editTask($id)
{

  $users = User::where('id',$id)->first();

	return view('task.edit',compact('users'));
}

    public function update(Request $request,$id)
 {
 $data["email"] = $request->email;
        
  
        $pdf = PDF::loadView('email.work', $data);
  
        Mail::send('email.work', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject("your work sheat")
                    ->attachData($pdf->output(), "text.pdf");
        });
     return back();
 }
}
