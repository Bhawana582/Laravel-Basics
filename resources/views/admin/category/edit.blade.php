<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>



<div class="container"><br>


<div class="row">


 <div class="col-md-12">
     <div class="card">
<div class="card-header">Add category</div>

<form action="{{url('category/update/'.$categories->id)}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Category Name</b></label>
    <input type="text" name="category_name" class="form-control"  aria-describedby="emailHelp" value="{{$categories->category_name}}">
    <small id="emailHelp" class="form-text text-muted"></small>

    @error('category_name')
    <span class="text text-danger">{{$message}}</span>
    @enderror


  <button type="submit" class="btn btn-primary">Update Category</button>
</form>



     </div>
 </div>

</div>
</div>

</x-app-layout>

