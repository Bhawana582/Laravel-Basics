<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Multipic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class BrandController extends Controller
{

    public function __construct(){

      $this->middleware('auth');

    }
    public function index(){

         $brands = Brand::latest()->paginate(5);


        return view('admin.brands.index', compact('brands'));

    }

    public function validation(Request $request){
        $validated = $request->validate(
            [
                'brand_name' => 'required|unique:brands|min:4',
                'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ],
            [
                'brand_name.required' => 'Please enter category name'

            ]);


         $brand_image = $request->file('brand_image');

        // $name_gen=hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/brand/';    //Creating Sub directory in Public folder to put image
        // $last_img = $up_location.$img_name;
        // $brand_image->move($up_location,$img_name);

        $name_gen=hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,200)->save('image/brand'.$name_gen);

        $last_img='image/brand'.$name_gen;



        // eloquent ORM(1ST METHOD)
        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,

            'created_at' => Carbon::now()


        ]);

        $notification= array(
            'message'=>'Brand Inserted Successfully',
            'alert-type'=>'success'
        );


        return redirect()->back()->with($notification);
    }

    public function Edit($id){
        $brands=Brand::find($id);
        return view('admin.brands.edit' ,compact('brands'));

}
    public function Update(Request $request ,$id){
       $validated = $request->validate(
            [
                'brand_name' => 'required',

            ],
            [
                'brand_name.required' => 'Please enter category name'

            ]);

        $old_image=$request->old_image;

         $brand_image = $request->file('brand_image');

     if($brand_image){

          $name_gen=hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';    //Creating Sub directory in Public folder to put image
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);

        unlink($old_image);

        Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,

            'created_at' => Carbon::now()


        ]);
        return redirect()->back()->with('success', 'Categories updated successfully');

        }else{

            Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'created_at' => Carbon::now()


        ]);
        return redirect()->back()->with('success', 'Brands updated successfully');

        }


    }

    public function delete($id){
        $delete=Brand::find($id)->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully');
    }


    //Multiple pictures

    public function allmulti(){
        $images= Multipic::all();

        return view('admin.Multipics.index',compact('images',));
    }

    public function storereq(Request $request){
        $images = $request->file('image');

        foreach($images as $multi_image){
        $name_gen=hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
        Image::make($multi_image)->resize(300,200)->save('image/multipic'.$name_gen);

        $last_img='image/multipic'.$name_gen;


        Multipic::insert([

            'image' => $last_img,

            'created_at' => Carbon::now()


        ]);
        }//end of foreach
        return Redirect()->back()->with('success', 'Categories inserted successfully');
    }

  public function logout(){
      Auth::logout();
      return redirect()->route('login');


  }
  public function addMulti(){

      return view('admin.Multipics.add');


  }


}
