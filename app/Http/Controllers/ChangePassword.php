<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class ChangePassword extends Controller
{
   public function Cpassword(){

      if(Auth::user()){
          $user=User::find(Auth::user()->id);
          if($user){
              return view('admin.profile.changepw',compact('user'));
          }
      }

   }
   public function PasswordUpdate(Request $request){
       $validateData=$request->validate([
           'oldpassword'=>'required',
           'password'=>'required|confirmed'
       ]);
       $hasedPassword=Auth::user()->password;
    //    dd($hasedPassword);
      if(Hash::check($request->oldpassword,$hasedPassword)){
            $user=User::find(Auth::id());
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('success','Password changed successfully');
      }
      else{
          return redirect()->back()->with ('error','Sorry something went wrong');
      }

   }


   public function updateProfile(){
if(Auth::user()){
          $user=User::find(Auth::user()->id);
          if($user){
              return view('admin.profile.change_user',compact('user'));
          }
      }

   }
   public function updateProfileUser(Request $request){
          $user=User::find(Auth::user()->id);
          if($user){
              $user->name=$request['name'];
              $user->email=$request['email'];
              $user->save();
              return Redirect()->back()->with ('success','user profile is updated sucessfully');
          }else{
                  return Redirect()->back();
              }
          }
        }
