@extends('admin.admin_master')

@section('admin')
<form action="{{url('about/update/'.$abouts->id)}}" method="POST" >
    @csrf
 <div class="content-wrapper">
          <div class="content">							<div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add About Here</h2>
										</div>
										<div class="card-body">
											<form>
												<div class="form-group">
													<label >Title</label>
													<input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$abouts->title}}">
													<span class="mt-2 d-block"></span>
												</div>
												<div class="form-group">
													<label >Short Description</label>
													<input type="text" class="form-control" name="short_des" value="{{$abouts->long_des}}">

												</div>
												<div class="form-group">
													<label >Long Description</label>
													<input type="text" class="form-control"  name="long_des" value="{{$abouts->long_des}}">

												</div>


												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>

											</form>
										</div>
									</div>
                                    </form>

@endsection
