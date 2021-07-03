
@extends('admin.admin_master')
@section('admin')

        <div class="card card-default">

            @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

 @if(session('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
										<div class="card-header card-header-border-bottom">
											<h2>Password configuration</h2>
										</div>
										<div class="card-body">
											<form action="{{route('update.password')}}" method="POST">
                                                @csrf
												<div class="form-group">
													<label>Old password</label>
													<input type="password" class="form-control" id="current_password" name="oldpassword"placeholder="Enter old password" >
                                                    @error('oldpassword')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
												</div>
												<div class="form-group">
													<label for="exampleFormControlPassword3">New Password</label>
													<input type="password" name="password"class="form-control" placeholder="Enter new password" id="password">
                                                    @error('password')
                                                       <span class="text-danger">{{$message}}</span>
                                                       @enderror
												</div>
												<div class="form-group">
													<label for="exampleFormControlPassword3">Confirm Password</label>
													<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm your password" >
												</div>
                                                 @error('password_confirmation')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
												<button class=" btn btn-info" type="submit">Submit</button>
											</form>
										</div>
									</div>
@endsection


