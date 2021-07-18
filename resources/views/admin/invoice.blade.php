@extends('layouts.master'); 

@section('content')
<style>
    .required:after {
content: " *";
color: red;
}
</style>
<div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container">
                                <!--begin::Dashboard-->
                                <!--begin::Row-->
                              <section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <a class="button" style="text-align:center;"><button onclick="window.print();" class="btn btn-primary"><i class="dripicons-print"></i> {{trans('file.Print')}}</button></a>
                    <div class="card-header d-flex align-items-center">
                        <h4>Create Invoice</h4>
                     
                        
                    </div>
                    
                    <div class="card-body">
                        <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        <form class="form" id="kt_form_1" method="post" action="{{route('setting.generalStore')}}" enctype="multipart/form-data">
                                                                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">First Name*</label>
                                        <input type="text" name="site_title" class="form-control" value="{{Auth::user()->first_name}}" required />
                                    </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Last Name </label>
                                        <input type="text" name="currency" class="form-control" value="{{Auth::user()->last_name}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Company Name *</label>
                                        <input type="text" name="currency" class="form-control" value="{{Auth::user()->company_name}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Address </label>
                                        <input type="text" name="currency" class="form-control" value="{{Auth::user()->address}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Phone number *</label>
                                        <input type="text" name="currency" class="form-control" value="{{Auth::user()->phone_number}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Account Name *</label>
                                        <input type="text" name="currency" class="form-control" value="{{Auth::user()->account_name}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Account number *</label>
                                        <input type="text" name="currency" class="form-control" value="" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required">Bank Name *</label>
                                        <input type="text" name="currency" class="form-control" value="" required />
                                    </div>
                                </div>
                             
                            
                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                       
<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
    Launch demo modal
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" style="height: 300px;">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
        </div>
    </div>
</div>
                                    </div>
                                </div>
                                         
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


                                <!--end::Row-->
                                <!--end::Dashboard-->
                            </div>
                            <!--end::Container-->
                        </div>
                 
@endsection