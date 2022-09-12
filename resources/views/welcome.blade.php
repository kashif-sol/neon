@extends('website')
@section('content')
<section role="main" class="content-body content-body-modern">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Dashboard</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">

								<li><span>Home</span></li>

								<li><span>eCommerce Dashboard</span></li>

							</ol>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">

							<div class="card card-modern card-modern-table-over-header">
								<div class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									</div>
									<h2 class="card-title">Recent Orders</h2>
								</div>
								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">

												<div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Filter By:</label>
														<select class="form-control select-style-1 filter-by" name="filter-by">
															<option value="all" selected>All</option>
															<option value="1">ID</option>
															<option value="2">Customer Name</option>
															<option value="3">Date</option>
															<option value="4">Total</option>
															<option value="5">Status</option>
														</select>
													</div>
												</div>
												<div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Show:</label>
														<select class="form-control select-style-1 results-per-page" name="results-per-page">
															<option value="12" selected>12</option>
															<option value="24">24</option>
															<option value="36">36</option>
															<option value="100">100</option>
														</select>
													</div>
												</div>
												<div class="col-12 col-lg-auto ps-lg-1">
													<div class="search search-style-1 search-style-1-lg mx-lg-auto">
														<div class="input-group">
															<input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
															<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<table class="table table-ecommerce-simple table-borderless table-striped mb-10" id="datatable-ecommerce-list" >

											<thead>
												<tr>
													<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
													<th width="8%">ID</th>
													<th width="28%"> Name</th>
													<th width="18%">Email</th>
													<th width="18%">Phone</th>
													<th width="15%">Indoor/Outdoor</th>
													<th width="15%">Help</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($data as $data)
                                                <tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td style="color: #008dc7"><b>{{$data->id}}</b></td>
													<td style="color: #008dc7"><b>{{$data->name}}</b></td>
													<td style="color: #008dc7"><b>{{$data->email}}</b></td>
													<td>{{$data->phone}}</td>
													<td>{{$data->sign}}</td>
													<td>{{$data->help}}</td>
                                                </tr>
                                                @endforeach
											</tbody>
										</table>
										<hr class="solid mt-5 opacity-4">
										<div class="datatable-footer">
											<div class="row align-items-center justify-content-between mt-3">
												<div class="col-md-auto order-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-stretch">
														<div class="d-grid gap-3 d-md-flex justify-content-md-end me-4">
															<select class="form-control select-style-1 bulk-action" name="bulk-action" style="min-width: 170px;">
																<option value="" selected>Bulk Actions</option>
																<option value="delete">Delete</option>
															</select>
															<a href="ecommerce-orders-detail.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
														</div>
													</div>
												</div>
												<div class="col-lg-auto text-center order-3 order-lg-2">
													<div class="results-info-wrapper"></div>
												</div>
												<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
													<div class="pagination-wrapper"></div>
												</div>
											</div>
										</div>
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
@endsection