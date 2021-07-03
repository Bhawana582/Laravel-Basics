<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
        </h2>
    </x-slot>



<div class="container"><br>


<div class="row">
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



            <div class="card-header">All categories</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>

      <th scope="col">Created at</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

      @foreach($categories as $category)

    <tr>
       <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
       <td>{{$category->category_name}}</td>

      <td>{{$category->created_at->diffforHumans()}}</td>
      <td>
        <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('category/delete/'.$category->id)}}" class="btn btn-danger">Delete</a>

        </td>

    </tr>

    @endforeach


  </tbody>
</table>

{{$categories->links()}}

</div>
 </div>



 <div class="col-md-4">
     <div class="card">
<div class="card-header">Add category</div>

<form action="{{route('category.validation')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Category Name</b></label>
    <input type="text" name="category_name" class="form-control"  aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>

    @error('category_name')
    <span class="text text-danger">{{$message}}</span>
    @enderror
    <br>

  <button type="submit" class="btn btn-primary">Add Category</button>
</form>



     </div>
 </div>

</div>
</div>

<div class="container"><br>


<div class="row">
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



            <div class="card-header">Trashed</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>

      <th scope="col">Created at</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

      @foreach($trashcat as $category)

    <tr>
       <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
       <td>{{$category->category_name}}</td>

      <td>{{$category->created_at->diffforHumans()}}</td>
      <td>
        <a href="{{url('category/restore/'.$category->id)}}" class="btn btn-primary">Restore</a>
        <a href="{{url('category/pdelete/'.$category->id)}}" class="btn btn-danger">Permanently delete</a>

        </td>

    </tr>

    @endforeach


  </tbody>
</table>

{{$trashcat->links()}}

</div>
 </div>


</x-app-layout>
















