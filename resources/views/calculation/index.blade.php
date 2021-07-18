@extends('layouts.master');

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
					
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Add Calculation</h3>
											
											</div>
											<!--begin::Form-->
											<form class="form" method="post" action="">
												<div class="card-body">
													<div class="form-group row">
														<div class="col-lg-6">
															<label>Cost of goods:</label>
															<input type="number" class="form-control" placeholder="Enter full name" />
														
														</div>
														<div class="col-lg-6">
															<label>Discount:</label>
															<input type="email" class="form-control" placeholder="Enter contact number" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Travel Coset:</label>
															<input type="email" class="form-control" placeholder="Enter full name" />
														
														</div>
														<div class="col-lg-6">
															<label>Epmloyee Costs:</label>
															<input type="email" class="form-control" placeholder="Enter contact number" />
															
														</div>
													</div>
                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Profite:</label>
															<input type="email" class="form-control" placeholder="Enter full name" />
														
														</div>
														
													</div>

                                                    <div id="kt_repeater_1">
												<div class="form-group row">
												
													<div data-repeater-list="" class="col-lg-10">
														<div data-repeater-item="" class="form-group row align-items-center">
															
															<div class="col-md-6">
																<label>Enter Value:</label>
																<input type="number" class="form-control" placeholder="Enter Your Cost" />
																<div class="d-md-none mb-2"></div>
															</div>
															
															<div class="col-md-6">
																<a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
																<i class="la la-trash-o"></i>Delete</a>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label text-right"></label>
													<div class="col-lg-4">
														<a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
														<i class="la la-plus"></i>Add Field</a>
													</div>
												</div>
											</div>
												
												
													<!-- begin: Example Code-->
													
													<!-- end: Example Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2">Save</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
														<div class="col-lg-6 text-lg-right">
															<button type="reset" class="btn btn-danger">Delete</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
										
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection
