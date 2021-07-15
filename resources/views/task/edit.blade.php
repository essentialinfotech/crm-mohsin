@extends('layouts.master');

@section('content')
<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
														
														
																		<form class="form" id="kt_form_1" method="get" action="{{route('admin.update',$users->id)}}" enctype="multipart/form-data">
																			@csrf
												<div class="card-body">
													
													<div class="alert alert-custom alert-light-danger d-none" role="alert" id="kt_form_1_msg">
														<div class="alert-icon">
															<i class="flaticon2-information"></i>
														</div>
														<div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting again.</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span>
																	<i class="ki ki-close"></i>
																</span>
															</button>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Email *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="email" class="form-control" name="email" value="{{$users->email}}" />
															
														</div>
													</div>

														<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12"> Task *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<textarea class="form-control" name="task" type="text"></textarea>
															
														</div>
													</div>


													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12"> File *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="file" class="form-control" name="task_file" id="task_file"  />
															
														</div>
													</div>
													
												
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-9 ml-lg-auto">
															<button type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Validate</button>
															
														</div>
													</div>
												</div>
											</form>
																	
													
												

						
						</div>
					</div>
@endsection
