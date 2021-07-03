@extends('admin.admin_master')

@section('admin')
 <div class="container">
     <div class="col-md-8">
     <div class="card">


         @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<div class="card-header">Edit brand</div>

<form action="{{url('brand/update/'.$brands->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="old_image" value="{{$brands->brand_image}}">
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Category Name</b></label>
    <input type="text" name="brand_name" class="form-control"  aria-describedby="emailHelp" value="{{$brands->brand_name}}">
    <small id="emailHelp" class="form-text text-muted"></small>

    @error('brand_name')
    <span class="text text-danger">{{$message}}</span>
    @enderror
    <br>

    <div class="form-group">
    <label for="exampleInputEmail1"><b>Category Image</b></label>
    <input type="file" name="brand_image" class="form-control"  aria-describedby="emailHelp"  value="{{$brands->brand_image}}">
    <small id="emailHelp" class="form-text text-muted"></small>

    @error('brand_image')
    <span class="text text-danger">{{$message}}</span>
    @enderror
    <br>
  <div class="form-group">

    <img src="{{ asset($brands->brand_image)}}" style="width: 400px; height:200px;" >
  </div>


  <button type="submit" class="btn btn-primary">Add Category</button>



</form>



     </div>
 </div>

</div>
</div>


</div>
</div>
 </div>

@endsection
















