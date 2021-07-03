@extends('admin.admin_master')
@section('admin')


<div class="container">
<a href="{{route('add.contact')}}" class="btn btn-success inline "><h5>Add contact</h5></a>
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
      <th scope="col" width=15%>Address</th>
      <th scope="col" width=25%>Email</th>
      <th scope="col" width=15%>Phone</th>
      <th scope="col" width=15%>Created at</th>
      <th scope="col" width=15%>Action</th>

    </tr>
  </thead>
  <tbody>
         @php($i=1)
      @foreach($contacts as $contact)

    <tr>
       <th scope="row">{{$i++}}</th>
       <td>{{$contact->address}}</td>
       <td>{{$contact->email}}</td>
       <td>{{$contact->phone}}</td>
      <td>{{$contact->created_at->diffforHumans()}}</td>
      <td>
        <a href="{{url('contact/edit/'.$contact->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('contact/delete/'.$contact->id)}} " onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>

        </td>

    </tr>

    @endforeach


  </tbody>
</table>



</div>
 </div>




</div>
</div>










@endsection

