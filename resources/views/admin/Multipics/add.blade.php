@extends('admin.admin_master')
@section('admin')


 <form action="{{route('multipic.validation')}}" method="POST" enctype="multipart/form-data" >
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
													<label >Category Image</label>
													<input type="file" class="form-control"  name="image[]" multiple>
													<span class="mt-2 d-block"></span>
												</div>



												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Add Image</button>

											</form>
										</div>
									</div>
                                    </form>
@endsection
