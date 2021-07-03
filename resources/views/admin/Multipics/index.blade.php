@extends('admin.admin_master')
@section('admin')

<a href="{{route('add.multipics')}}" class="btn btn-primary">Add Pictures</a>
<div class="container"><br>


<div class="row">
    <div class="col-md-12">
        <div class="card">

<div class="card-header text-center">Selected pictures</div>
<div class="card-group">

@foreach ($images as $multi )
<div class="col-md-4 mt-5">
    <div class="card">
    <img src="{{asset($multi->image)}}" style="height:200px; width:300px; "  alt="">
</div>
</div>
@endforeach

</div>
 </div>

</div>




</div>
</div>



@endsection
















