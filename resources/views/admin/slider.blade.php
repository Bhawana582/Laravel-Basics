@extends('admin.admin_master')
@section('admin')

<div class="container">
<a href="{{route('add.slider')}}" class="btn btn-success inline "><h5>Add Slider</h5></a>
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">

@if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif



            <div class="card-header">All sliders</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col" width=15%>SL</th>
      <th scope="col" width=15%>Slider Title</th>
      <th scope="col" width=25%>Slider Description</th>
      <th scope="col" width=15%>Slider Image</th>
      <th scope="col" width=15%>Created at</th>
      <th scope="col" width=15%>Action</th>

    </tr>
  </thead>
  <tbody>
         @php($i=1)
      @foreach($sliders as $slider)

    <tr>
       <th scope="row">{{$i++}}</th>
       <td>{{$slider->title}}</td>
       <td>{{$slider->description}}</td>
       <td><img src="{{asset($slider->image)}}" style="height:40px;weight:70px "></td>

      <td>{{$slider->created_at->diffforHumans()}}</td>
      <td>
        <a href="{{url('slider/edit/'.$slider->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('slider/delete/'.$slider->id)}} " onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>

        </td>

    </tr>

    @endforeach


  </tbody>
</table>



</div>
 </div>




</div>
</div>




@endsection()
