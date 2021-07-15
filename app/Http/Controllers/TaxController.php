<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TaxExport;
use App\Tax;
use PDF;
use Auth;


class TaxController extends Controller
{
     public function index()
    {
    	$taxs = Tax::get();
    return view('tax.create',compact('taxs'));
    }

    public function downloadPDF() {
        $shows = Tax::all();
        $pdf = PDF::loadView('tax.pdf', compact('shows'));
        
        return $pdf->download('tax.pdf');
}

  public function export() 
    {
        return Excel::download(new TaxExport, 'taxs.xlsx');
    }
    public function insert(Request $request)
    {
    
    	if ($request->isMethod('post')) {
       $data = $request->all();
 // echo "<pre";print_r($data);die();
       $taxs = new Tax;
       $taxs->name =$data['name'];
       $taxs->rate =$data['rate'];
       $taxs->user_id =Auth::user()->id;
  
       $taxs->save();
       return redirect()->back()->with('flash_message_success',' Product add Successfully');
         //return redirect()->back()->with('flash_message_success',' Product add Successfully');
}


    }

      public function updateStatus($id, $status)
      {

          $banner = Tax::find($id);
          $banner->status = $status;
          if ($banner->save()){
              echo "1";
          }else{
              echo "0";
          }

      }

       public function update(Request $request,$id)
    {
      if ($request->isMethod('post')) {
        $data = $request->all();
        $tax = Tax::find($id);
     $tax->name =$data['name'];
       $tax->rate =$data['rate'];
        
          $tax->save();
          return redirect()->back()->with('flash_message_success','tax has update successfully');
      }

      // $tax = Tax::where('id',$id)->first();
      // return view('tax.create');
    }


       public function delete($id)
    {
      $brand = Tax::where(['id'=>$id])->first();

    $brand->delete();
    return back()->with('flash_message_success','Brand has delete successfully');
    }

    public function invoice($id)
    {
       $invoices = Tax::where('id',$id)->first();
      return view('tax.invoice',compact('invoices'));
    }
}



