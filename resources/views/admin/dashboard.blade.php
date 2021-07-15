@extends('layouts.master'); 

@section('content')
<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
					        <div class="container-fluid">
					          <div class="col-md-12">
					            <div class="brand-text float-left mt-4">
					                <h3>{{trans('file.welcome')}} <span>{{Auth::user()->name}}</span> </h3>
					            </div>
					            <div class="filter-toggle btn-group float-right">
					              <button class="btn btn-secondary date-btn" data-start_date="{{date('Y-m-d')}}" data-end_date="{{date('Y-m-d')}}">{{trans('file.Today')}}</button>
					              <button class="btn btn-secondary date-btn" data-start_date="{{date('Y-m-d', strtotime(' -7 day'))}}" data-end_date="{{date('Y-m-d')}}">{{trans('file.Last 7 Days')}}</button>
					              <button class="btn btn-secondary date-btn active" data-start_date="{{date('Y').'-'.date('m').'-'.'01'}}" data-end_date="{{date('Y-m-d')}}">{{trans('file.This Month')}}</button>
					              <button class="btn btn-secondary date-btn" data-start_date="{{date('Y').'-01'.'-01'}}" data-end_date="{{date('Y').'-12'.'-31'}}">{{trans('file.This Year')}}</button>
					            </div>
					          </div>
					        </div>
					      </div>
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-3">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
											
											<div class="card-body">
												<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%;">
																<i class="icon-2x text-dark-50 ki ki-menu"></i>
																
																<p >Total Sale</p>
																<p class="revenue-data">0.00</p>
															</div>

														
														</div></div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-3">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
										
											<div class="card-body"><div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%">
																<i class="icon-2x text-dark-50 ki ki-menu-grid"></i>
																
																<p>Proift</p>
																<p>0.00</p>
															</div>
															<div class="text-muted"></div>
														</div></div>
										</div>
										<!--end::Card-->
									</div>
										<div class="col-lg-3">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
										
											<div class="card-body"><div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%;" >
																<i class="icon-2x text-dark-50 ki ki-menu-grid bi bi-align-center"></i>
																
																<p>Accepted Order</p>
																<p>0.00</p>
															</div>
															<div class="text-muted"></div>
														</div></div>
										</div>
										<!--end::Card-->
									</div>

									<div class="col-lg-3">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
										
											<div class="card-body"><div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%;" >
																<i class="icon-2x text-dark-50 ki ki-menu-grid bi bi-align-center"></i>
																
																<p>Reject Orders</p>
																<p>0.00</p>
															</div>
															<div class="text-muted"></div>
														</div></div>
										</div>
										<!--end::Card-->
									</div>
										<div class="col-lg-3" style="margin-top: 10px">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
										
											<div class="card-body"><div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%;" >
																<i class="icon-2x text-dark-50 ki ki-menu-grid bi bi-align-center"></i>
																
																<p>Open Invoice</p>
																<p>0.00</p>
															</div>
															<div class="text-muted"></div>
														</div></div>
										</div>
										<!--end::Card-->
									</div>
										<div class="col-lg-3" style="margin-top: 10px">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
										
											<div class="card-body"><div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%;" >
																<i class="icon-2x text-dark-50 ki ki-menu-grid bi bi-align-center"></i>
																
																<p>Paid Invoice</p>
																<p>0.00</p>
															</div>
															<div class="text-muted"></div>
														</div></div>
										</div>
										<!--end::Card-->
									</div>
										<div class="col-lg-3" style="margin-top: 10px">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
										
											<div class="card-body"><div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 100%;" >
																<i class="icon-2x text-dark-50 ki ki-menu-grid bi bi-align-center"></i>

																<p>Total Cost</p>
																<p>0.00</p>
															</div>
															<div class="text-muted"></div>
														</div></div>
										</div>
										<!--end::Card-->
									</div>
                             <div class="col-lg-6" style="margin-top: 10px">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<!--begin::Header-->
											<div class="card-header h-auto">
												<!--begin::Title-->
												<div class="card-title py-5">
													<h3 class="card-label">Cash Flow</h3>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_1"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
                                  	<div class="col-lg-6" style="margin-top: 10px">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Mothly</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_13"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									
								</div>
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>

						<script type="text/javascript">
    // Show and hide color-switcher
    $(".color-switcher .switcher-button").on('click', function() {
        $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
    });

    // Color Skins
    $('a.color').on('click', function() {
        /*var title = $(this).attr('title');
        $('#style-colors').attr('href', 'css/skin-' + title + '.css');
        return false;*/
        $.get('setting/general_setting/change-theme/' + $(this).data('color'), function(data) {
        });
        var style_link= $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color') );
        $('#custom-style').attr('href', style_link);
    });

    $(".date-btn").on("click", function() {
        $(".date-btn").removeClass("active");
        $(this).addClass("active");
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $.get('dashboard-filter/' + start_date + '/' + end_date, function(data) {
            dashboardFilter(data);
        });
    });

    function dashboardFilter(data){
        $('.revenue-data').hide();
        $('.revenue-data').html(parseFloat(data[0]).toFixed(2));
        $('.revenue-data').show(500);

        $('.return-data').hide();
        $('.return-data').html(parseFloat(data[1]).toFixed(2));
        $('.return-data').show(500);

        $('.profit-data').hide();
        $('.profit-data').html(parseFloat(data[2]).toFixed(2));
        $('.profit-data').show(500);

        $('.purchase_return-data').hide();
        $('.purchase_return-data').html(parseFloat(data[3]).toFixed(2));
        $('.purchase_return-data').show(500);
    }
</script>
@endsection