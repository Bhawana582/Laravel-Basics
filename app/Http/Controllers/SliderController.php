<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Image;
use Auth;


use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function SliderIndex(){

        $sliders=Slider::all();
        return view('admin.slider',compact('sliders'));
    }

    public function Slideradd(){
        return view('admin.addslider');
    }

    public function Sliderreq(Request $request){

         $slider_image = $request->file('image');

     if($slider_image){

          $name_gen=hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';    //Creating Sub directory in Public folder to put image
        $last_img = $up_location.$img_name;
        $slider_image->move($up_location,$img_name);


        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,

            'created_at' => Carbon::now()


        ]);
        return redirect()->route('company.slider')->with('success','Category update successfullly');

        }else{

            Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()



        ]);
         return redirect()->route('company.slider')->with('success','Category update successfullly');
        }
    }

    public function delete($id){
        $delete=Slider::find($id)->delete();
        return redirect()->back();
    }
    public function Edit($id){
        $sliders=Slider::find($id);
        return view('admin.editslider',compact('sliders'));
    }

public function Update(Request $request ,$id){
        $slider_image = $request->file('image');

     if($slider_image){

          $name_gen=hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';    //Creating Sub directory in Public folder to put image
        $last_img = $up_location.$img_name;
        $slider_image->move($up_location,$img_name);


        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,

            'created_at' => Carbon::now()


        ]);
        return redirect()->route('company.slider')->with('success','Category update successfullly');

        }else{

            Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()



        ]);
         return redirect()->route('company.slider')->with('success','Category update successfullly');
        }

    }

}
