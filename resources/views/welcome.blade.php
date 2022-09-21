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
									<h2 class="card-title">Dashboard</h2><br>
									<a href="/export_quotes" class="btn btn-success mb-4">Export</a>
									<br>
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
													<th width="28%"> Name</th>
													<th width="18%">Email</th>
													<th width="18%">Phone</th>
													<th width="5%">Indoor/Outdoor</th>
													<th width="15%">Help</th>
													<th width="10%">Actions</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($data as $data)
                                                <tr>
													<td >{{$data->name}}</td>
													<td >{{$data->email}}</td>
													<td>{{$data->phone}}</td>
													<td>{{$data->sign}}</td>
													<td>{{$data->help}}</td>
													<td>
														<a  data-id="{{$data->id}}" class="delete-record" ><i class="fa fa-trash"></i></a>
														<a  data-id="{{$data->id}}" class="get-record" ><i class="fa fa-edit"></i></a>
													</td>
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

				<div class="modal fade" id="edit-quote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
							<form id="save-quote">
								<input type="hidden" id="qId" name="id" value="" >
								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="name">Name</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="name" name="name">
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
										<input type="email" class="form-control" id="phone" name="phone">
									</div>
								</div>

								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="phone"></label>
									<div class="radio-custom">
										<input type="radio" id="indoor" name="sign" value="indoor">
										<label for="indoor">In door</label>
									</div>

									<div class="radio-custom radio-primary">
										<input type="radio" id="outdoor" name="sign"  value="outdoor">
										<label for="outdoor">Out door</label>
									</div>
									 
								</div>

								<div class="form-group row pb-4">
									<label class="col-lg-3 control-label text-lg-end pt-2" for="help">help</label>
									<div class="col-lg-6">
										<input type="email" class="form-control" id="help" name="help">
									</div>
								</div>


							</form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="edit-quote">Close</button>
						  <button type="button" class="btn btn-primary" id="saveQuote">Save changes</button>
						</div>
					  </div>
					</div>
				  </div>
@endsection