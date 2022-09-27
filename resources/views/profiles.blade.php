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
									<a href="/export_profiles" class="btn btn-success mb-4">Export</a>
									<br>

								</div>
								<div class="card-body">
									<div class="datatables-header-footer-wrapper" style="overflow-x: scroll">
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
													<th width="15%">Actions</th>
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
													
													<td>
														<a  data-id="{{$data->id}}" class="delete-profile" ><i class="fa fa-trash"></i></a>
														<a  data-id="{{$data->id}}" class="get-profile" ><i class="fa fa-edit"></i></a>
													</td>
                                                </tr>
                                                @endforeach
											</tbody>
										</table>
										<hr class="solid mt-5 opacity-4">
										
									
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
				<div class="modal fade" id="edit-quote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						  <button type="button" class="close" id="closemodal" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
							<form id="save-profile" action="{{url('save-profile')}}" method="post" enctype="multipart/form-data">
							@csrf	
							<input type="hidden" id="id" name="id" value="" >
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="name">Name</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="name" name="name">
									</div>
								</div>
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="last_name"> Last Name</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="last_name" name="last_name">
									</div>
								</div>

								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="email">email</label>
									<div class="col-lg-6">
										<input type="email" class="form-control" id="email" name="email">
									</div>
								</div>

								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="phone">phone</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="phone" name="phone">
									</div>
								</div>

								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="sign"></label>
									<div class="col-lg-6">
									<div class="radio-custom">
										<input type="radio" id="indoor" name="sign" value="indoor">
										<label for="indoor">In door</label>
									</div>

									<div class="radio-custom radio-primary">
										<input type="radio" id="outdoor" name="sign"  value="outdoor">
										<label for="outdoor">Out door</label>
									</div>
									</div> 
								</div>
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="size">Size</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="size" name="size">
									</div>
								</div>
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="size">Amount</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="amount" name="amount">
									</div>
								</div>
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="cdesign">About</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="cdesign" name="cdesign">
									</div>
								</div>
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="cdesign">Currency</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="budget" name="budget">
									</div>
								</div>
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="image">Image</label>
									<div class="col-lg-6">
										<input type="file" class="form-control" id="image" name="image">
									</div>
								</div>
									

								

								<div class="modal-footer">
									<button type="button" class="close btn btn-secondary" id="closebtn" data-dismiss="modal" aria-label="Close">Close</button>
									<button type="submit" class="btn btn-primary" id="saveProfile">Save changes</button>
								  </div>
							</form>
						</div>
						
					  </div>
					</div>
				  </div>
@endsection