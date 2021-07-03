<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\ContactProfile;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts=ContactProfile::all();
        $contact_forms=ContactForm::all();
        return view('admin.contacts.contact',compact('contacts','contact_forms'));
    }

    public function addContact(){
        return view('admin.contacts.add');
    }

    public function SubmitContact(Request $request){
        $contacts=ContactProfile::insert([
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'created_at'=> Carbon::now()
        ]);
        return redirect()->route('contact.profile');
    }

    public function contactIndex(){
        $contacts=ContactProfile::all();
        return view('admin.frontend.contact',compact('contacts'));
    }
     public function delete($id){
        $delete=ContactProfile::find($id)->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }

    public function contactFormTAble(){
        $contacts=ContactForm::all();
        return view('admin.contacts.contactTable',compact('contacts'));
    }
    public function contactForm(){
        return view('admin.contacts.contactForm');
    }

public function contactSubmitHome(Request $request){
    ContactForm::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
        'created_at'=>Carbon::now()

    ]);
     return redirect()->route('contact')->with('success', 'Form submitted successfully');
}

  public function deleteForm($id){
          $delete=ContactForm::find($id)->delete();
         return redirect()->back()->with('success','Message deleted successfuly');


}

}
