@extends('admin.admin_master')
@section('admin')

	<div class="card card-default">

										<div class="card-header card-header-border-bottom">
											<h2>Contacts profile</h2>
										</div>
										<div class="card-body">
											<form action="{{route('submit.contact')}}" class="form-pill" method="POST">
                                                @csrf
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control" name='address' >
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control" name='email'>
												</div>
												<div class="form-group">
													<label>Phone</label>
													<input type="text" class="form-control" name="phone">
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>


											</form>
										</div>
									</div>




@endsection

