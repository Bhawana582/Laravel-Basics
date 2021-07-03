<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChangePassword;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Brand;
use App\Models\About;
use App\Models\Multipic;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $brands=Brand::all();
    $abouts=About::all();
    $images=Multipic::all();
    return view('admin.frontend.home', compact('brands','abouts','images'));
});

// Category

Route::get('categories', [CategoryController::class, 'allcat'])->name('all.category');
Route::get('category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('category/update/{id}', [CategoryController::class, 'Update']);
Route::get('category/delete/{id}', [CategoryController::class, 'softdelete']);
Route::get('category/restore/{id}', [CategoryController::class, 'restore']);
Route::get('category/pdelete/{id}', [CategoryController::class, 'pdelete']);
Route::post('validation', [CategoryController::class, 'valido'])->name('category.validation');

// brands

Route::get('brands', [BrandController::class, 'index'])->name('all.brands');
Route::post('brand/validation', [BrandController::class, 'validation'])->name('brand.validation');
Route::get('brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('brand/update/{id}', [BrandController::class, 'Update']);
Route::get('brand/delete/{id}', [BrandController::class, 'delete']);

// multipic
Route::get('multipic/pics', [BrandController::class, 'allmulti'])->name('all.multipic');
Route::get('multipic/add', [BrandController::class, 'addMulti'])->name('add.multipics');
Route::post('multipic/validation', [BrandController::class, 'storereq'])->name('multipic.validation');


Route::get('user/logout', [BrandController::class, 'logout'])->name('user.logout');


//slider

Route::get('slider/company', [SliderController::class, 'SliderIndex'])->name('company.slider');
Route::get('slider/add', [SliderController::class, 'Slideradd'])->name('add.slider');
Route::get('slider/edit/{id}', [SliderController::class, 'Edit']);
Route::get('slider/delete/{id}', [SliderController::class, 'delete']);
Route::post('slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
Route::post('slider/adding', [SliderController::class, 'Sliderreq'])->name('add.slider.request');

//About
Route::get('about/us',[AboutController::class,'index'])->name('about');
Route::post('about/submit', [AboutController::class, 'StoreAbout'])->name('submit.add');
Route::get('about/add',[AboutController::class,'AboutAdd'])->name('add.about');
Route::get('about/edit/{id}',[AboutController::class,'Edit']);
Route::get('about/delete/{id}',[AboutController::class,'delete']);
Route::post('about/update/{id}',[AboutController::class,'update']);





Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard1', function () {
    $users=User::all();
    return view('dashboard1',compact('users'));
})->name('dashboard');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('admin.index');
});

//Contact page for admin
Route::get('/contact/profile',[ContactController::class,'index'])->name('contact.profile');
Route::get('/contact/delete/{id}',[ContactController::class,'delete']);
Route::get('/contact/add',[ContactController::class,'addContact'])->name('add.contact');
Route::post('/contact/submit',[ContactController::class,'SubmitContact'])->name('submit.contact');

//contact for frontend
Route::get('/contact',[ContactController::class,'contactIndex'])->name('contact');

//contact form for Admin
Route::get('/contact/form',[ContactController::class,'contactFormTAble'])->name('company.form');
Route::get('contact/delete/{id}',[ContactController::class,'deleteForm']);
Route::get('/contact/form/add',[ContactController::class,'contactForm'])->name('addForm.contact');
Route::post('/contact/form/submit',[ContactController::class,'contactSubmitHome'])->name('form.contact.submit');

//change password
Route::get('/password',[ChangePassword::class,'Cpassword'])->name('change.password');
Route::post('/password/update',[ChangePassword::class,'PasswordUpdate'])->name('update.password');

//Update profile
Route::get('/user/profile/update',[ChangePassword::class,'updateProfile'])->name('update.profile');
Route::post('/user/profile/update/ne',[ChangePassword::class,'updateProfileUser'])->name('update.user.profile');
