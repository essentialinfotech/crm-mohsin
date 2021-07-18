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
											<form class="form" method="post" action="{{route('calculation.insert')}}">
												@csrf
												<div class="card-body">
													<div class="form-group row">
													<div class="col-lg-6">
															<label>Email:</label>
															<input type="email" name="email" class="form-control" placeholder="Enter Your User Email" />
														
														</div>
														<div class="col-lg-6">
															<label>Password</label>
															<input type="password" name="password" class="form-control" placeholder="Enter Your User Password" />
														
														</div>
														<div class="col-lg-6">
															<label>Area:</label>
                                                            <select class="form-control"  id="category" size="1" name="area" onchange="makeSubmenu(this.value)">
                                                                
                                                                <option>Select Area</option>
                                                                @foreach($calculations as $calculation)
                                                                <option value="{{$calculation->area}}">{{$calculation->area}}</option>
                                                                @endforeach
                                                            </select>
															
															
														</div>
														<div class="col-lg-6">
															<label>Cost of Goods:</label>
                                                            <select class="form-control" name="goods"  id="categorySelect" size="1" onchange="makeSubmenu(this.value)">
                                                                
                                                                <option>Select Cost of Goods</option>
                                                                @foreach($calculations as $calculation)
                                                                <option value="{{$calculation->goods}}">{{$calculation->goods}}</option>
                                                                @endforeach
                                                            </select>
															
														
														</div>
                                                        <div class="col-lg-6">
															<label>Discount:</label>
                                                            <select class="form-control" name="discount"  id="categorySelect" size="1" onchange="makeSubmenu(this.value)">
                                                                
                                                                <option>Select Discount</option>
                                                                @foreach($calculations as $calculation)
                                                                <option value="{{$calculation->discount}}">{{$calculation->discount}}</option>
                                                                @endforeach
                                                            </select>
															
														
														</div>
                                                        <div class="col-lg-6">
															<label>Travel Cost:</label>
                                                            <select class="form-control" name="travel_cost"  id="categorySelect" size="1" onchange="makeSubmenu(this.value)">
                                                                
                                                                <option>Select Travel Cost</option>
                                                                @foreach($calculations as $calculation)
                                                                <option value="{{$calculation->travel_cost}}">{{$calculation->travel_cost}}</option>
                                                                @endforeach
                                                            </select>
															
														
														</div>
                                                        <div class="col-lg-6">
															<label>Travel Cost:</label>
                                                            <select class="form-control" name="employee_cost"  id="categorySelect" size="1" onchange="makeSubmenu(this.value)">
                                                                
                                                                <option>Select Employee Cost</option>
                                                                @foreach($calculations as $calculation)
                                                                <option value="{{$calculation->employee_cost}}">{{$calculation->employee_cost}}</option>
                                                                @endforeach
                                                            </select>
															
														
														</div>
                                                        <div class="col-lg-6">
															<label>Travel Cost:</label>
                                                            <select class="form-control" name="profite"  id="categorySelect" size="1" onchange="makeSubmenu(this.value)">
                                                                
                                                                <option>Select Profit</option>
                                                                @foreach($calculations as $calculation)
                                                                <option value="{{$calculation->profite}}">{{$calculation->profite}}</option>
                                                                @endforeach
                                                            </select>
															
														
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
