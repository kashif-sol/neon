@extends('website')
@section('content')
<section role="main" class="content-body content-body-modern">
					

					<!-- start: page -->
					<div class="row">
						<div class="col">

							<div class="card card-modern card-modern-table-over-header">
								<div class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									</div>
									<h2 class="card-title">Profiles</h2><br>
								</div>
								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">
											</div>
											
										</div>

										<table class="table table-ecommerce-simple table-borderless table-striped mb-10" id="datatable-ecommerce-list" >

											<thead>
												<tr>
													<th width="8%">ID</th>
													<th width="28%"> Name</th>
													<th width="28%"> Last Name</th>
													<th width="18%">Email</th>
													<th width="18%">Phone</th>
													<th width="15%">Indoor/Outdoor</th>
													<th width="15%">Size</th>
													<th width="15%">About</th>
													<th width="15%">Currency</th>
													<th width="15%">Image</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($data as $data)
                                                <tr>
													<td style="color: #008dc7"><b>{{$data->id}}</b></td>
													<td style="color: #008dc7"><b>{{$data->name}}</b></td>
													<td style="color: #008dc7"><b>{{$data->last_name}}</b></td>
													<td style="color: #008dc7"><b>{{$data->email}}</b></td>
													<td>{{$data->phone}}</td>
													<td>{{$data->sign}}</td>
													<td>{{$data->size}}</td>
													<td>{{$data->cdesign}}</td>
													<td>{{$data->budget}}</td>
													<td>{{$data->image}}</td>
                                                </tr>
                                                @endforeach
											</tbody>
										</table>
										<hr class="solid mt-5 opacity-4">
										
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
@endsection