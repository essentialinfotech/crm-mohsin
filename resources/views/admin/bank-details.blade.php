@extends('layouts.master');

@section('content')
<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
														
												
													
												

								<!--begin::Dashboard-->
								<!--begin::Row-->
							{{-- 	<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Category</button></h3>
												<a href="{{ route('category.index') }}">Download PDF</a>

											</div>
											<!--begin::Form-->
											<form class="form" id="kt_form_1">
												<div class="card-body">
													<!--begin: Code-->
													<div class="example-code mb-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
															</li>
														</ul>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
																</div>
															</div>
															<div class="tab-pane" id="example_code_js">
																<div class="example-highlight">
																	<pre style="height:400px">

																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
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
														<label class="col-form-label text-right col-lg-3 col-sm-12">Category Name *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="name" placeholder="Enter your category Name" />
															
														</div>
													</div>
												
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-9 ml-lg-auto">
															<button type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Validate</button>
															<button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
								
								<!--end::Dashboard-->
							</div> --}}
							<!--end::Container-->
							<div class="card card-custom gutter-b">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										
									</div>
									<div class="card-body">
										<form class="form" id="kt_form_1" method="post" action="{{route('bank.insert')}}" enctype="multipart/form-data">
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
														<label class="col-form-label text-right col-lg-3 col-sm-12">Company Name *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="name" />
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Account Name *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="account_name"  />
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Account Number *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="account"  />
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Bank Name *</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input type="text" class="form-control" name="b_name"  />
															
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
																
										<!--end: Datatable-->
									</div>
								</div>
						</div>
					</div>
@endsection
