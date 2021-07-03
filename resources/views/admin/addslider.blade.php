@extends('admin.admin_master')

@section('admin')
<form action="{{route('add.slider.request')}}" method="POST" enctype="multipart/form-data">
    @csrf
 <div class="content-wrapper">
          <div class="content">							<div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add Slider Heres</h2>
										</div>
										<div class="card-body">
											<form>
												<div class="form-group">
													<label for="exampleFormControlInput1">Title</label>
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" name="title" >
													<span class="mt-2 d-block"></span>
												</div>
												<div class="form-group">
													<label for="exampleFormControlPassword">Description</label>
													<textarea class="form-control" id="exampleFormControlPassword" placeholder="Password" name="description">
                                                    </textarea>
												</div>

												<div class="form-group">
													<label for="exampleFormControlPassword">Image</label>
													<input type="file" class="form-control" id="exampleFormControlPassword" placeholder="Password" name="image">
												</div>

												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>

											</form>
										</div>
									</div>
                                    </form>

@endsection
