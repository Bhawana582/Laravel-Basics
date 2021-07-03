<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Carbon;


class CategoryController extends Controller
{

    public function __construct(){

      $this->middleware('auth');

    }

    public function allcat()
    {
        $categories = Category::latest()->paginate(5);
        $trashcat= Category::onlyTrashed()->latest()->paginate(3);

        return view('admin.category.index', compact('categories','trashcat'));
    }
    public function valido(Request $request)
    {
        $validated = $request->validate(
            [
                'category_name' => 'required|unique:categories|max:255',
            ],
            [
                'category_name.required' => 'Please enter category name'

            ]
        );


        // eloquent ORM(1ST METHOD)
        Category::insert([
            'category_name' => $request->category_name,

            'created_at' => Carbon::now()


        ]);


        return redirect()->back()->with('success', 'Categories inserted successfully');
    }

    public function Edit($id){
        $categories=Category::find($id);
        return view('admin.category.edit',compact('categories'));
    }

    public function Update(Request $request ,$id){
       $update=Category::find($id)->update([
           'category_name'=>$request->category_name
       ]);
       return redirect()->route('all.category')->with('success','Category update successfullly');

    }
     public function softdelete($id){
         $delete=Category::find($id)->delete();
         return redirect()->back()->with('success','Item deleted successfuly');

     }

     public function restore($id){
         $delete=Category::withTrashed()->find($id)->restore();
         return redirect()->back()->with('success','Item restored successfuly');


     }

     public function pdelete($id){
         $delete = Category::onlyTrashed()->find($id)->forceDelete();
         return redirect()->back()->with('success','Item permantly successfuly');
     }
}
