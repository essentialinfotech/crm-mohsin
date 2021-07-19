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
												<button
										data-design-type="Poster"
										data-api-key="API KEY GOES HERE"
										class="canva-design-button"
										style="display: none;"
										>Design on Canva</button>

											
											</div>
											<!--begin::Form-->
											<form class="form" method="post" action="{{route('calculation.add')}}">
												@csrf
												<div class="card-body">
													<div class="form-group row">
													<div class="col-lg-6">
															<label>Enter Your area:</label>
															<input type="text" name="area" class="form-control" placeholder="Enter Your area" />
														
														</div>
														<div class="col-lg-6">
															<label>Cost of goods:</label>
															<input type="number" name="goods" class="form-control" placeholder="Enter Youyr Cost of goods" />
														
														</div>
														<div class="col-lg-6">
															<label>Discount:</label>
															<input type="number" name="discount" class="form-control" placeholder="Enter Your Discount" />
															
														</div>
														<div class="col-lg-6">
															<label>Travel Coset:</label>
															<input type="number" name="travel_cost" class="form-control" placeholder="Enter Your Travel Cost" />
														
														</div>
														<div class="col-lg-6">
															<label>Epmloyee Costs:</label>
															<input type="number" name="employee_cost" class="form-control" placeholder="Enter Your Employee Cost" />
															
														</div>

														<div class="col-lg-6">
															<label>Profite:</label>
															<input type="number" name="profite" class="form-control" placeholder="Enter your Profit" />
														
														</div>
													</div>
                                                 

                                    
													
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
