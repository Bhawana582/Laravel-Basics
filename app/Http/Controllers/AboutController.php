<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
   public function index(){
       $abouts =About::latest()->get();
       return view('admin.about.index',compact('abouts'));
   }

   public function AboutAdd(){
       return view('admin.about.add');
   }


   public function StoreAbout(Request $request)
{

  About::insert([
      'title'=>$request->title,
       'short_des' =>$request->short_des,
        'long_des' =>$request->long_des,
        'created_at' => Carbon::now()

  ]);

  return redirect()->route('about')->with('success','Category update successfullly');

}
public function Edit($id){
    $abouts=About::find($id);
    return view('admin.about.edit',compact('abouts'));
}
public function update(Request $request, $id){

     About::find($id)->update([
      'title'=>$request->title,
       'short_des' =>$request->short_des,
        'long_des' =>$request->long_des,
        'created_at' => Carbon::now()

  ]);
  return redirect()->route('about')->with('success','About update successfullly');
}

public function delete($id){
    $delete=About::find($id)->delete();
    return redirect()->back()->with('success', 'About item deleted successfully');

}

}
