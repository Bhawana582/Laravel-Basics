@extends('admin.admin_master')


@section('admin')

<div class="container"><br>


<div class="row">
    <div class="col-md-8">
        <div class="card">


<div class="card-header">All brands</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Brand Image</th>

      <th scope="col">Created at</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

      @foreach($brands as $brand)

    <tr>
       <th scope="row">{{$brands->firstItem()+$loop->index}}</th>
       <td>{{$brand->brand_name}}</td>
       <td><img src="{{asset($brand->brand_image)}}" style="height:40px;weight:70px "></td>

      <td>{{$brand->created_at->diffforHumans()}}</td>
      <td>
        <a href="{{url('brand/edit/'.$brand->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('brand/delete/'.$brand->id)}} " onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>

        </td>

    </tr>

    @endforeach


  </tbody>
</table>

{{$brands->links()}}

</div>
 </div>



 <div class="col-md-4">
     <div class="card">
<div class="card-header">Add brand</div>

<form action="{{route('brand.validation')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Category Name</b></label>
    <input type="text" name="brand_name" class="form-control"  aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>

    @error('brand_name')
    <span class="text text-danger">{{$message}}</span>
    @enderror
    <br>

    <div class="form-group">
    <label for="exampleInputEmail1"><b>Category Image</b></label>
    <input type="file" name="brand_image" class="form-control"  aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>

    @error('brand_image')
    <span class="text text-danger">{{$message}}</span>
    @enderror
    <br>



  <button type="submit" class="btn btn-primary">Add Category</button>



</form>



     </div>
 </div>

</div>
</div>


</div>
 </div>


@endsection()
















