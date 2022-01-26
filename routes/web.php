<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\RezervationController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/categorytreatment/{id}', [HomeController::class, 'categorytreatment'])->name('categorytreatment');
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
Route::get('/treatment/{id}', [HomeController::class, 'treatment'])->name('treatment');
Route::post('/gettreatment', [HomeController::class, 'gettreatment'])->name('gettreatment');
Route::get('/alldiet', [HomeController::class, 'alldiet'])->name('alldiet');
Route::get('/getimage', [HomeController::class, 'getimage'])->name('getimage');



//Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    //Admin Role
Route::middleware('admin')->group(function (){
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


#Treatment
Route::prefix('treatment')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\TreatmentController::class,'index'])->name('admin_treatments');
    Route::get('create',[\App\Http\Controllers\Admin\TreatmentController::class,'create'])->name('admin_treatment_add');
    Route::post('store',[\App\Http\Controllers\Admin\TreatmentController::class,'store'])->name('admin_treatment_store');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\TreatmentController::class,'edit'])->name('admin_treatment_edit');
    Route::post('update/{id}',[\App\Http\Controllers\Admin\TreatmentController::class,'update'])->name('admin_treatment_update');
    Route::get('delete/{id}',[\App\Http\Controllers\Admin\TreatmentController::class,'destroy'])->name('admin_treatment_delete');
    Route::get('show',[\App\Http\Controllers\Admin\TreatmentController::class,'show'])->name('admin_treatment_show');
});
#Message
    Route::prefix('messages')->group(function (){
        Route::get('/',[MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class,'show'])->name('admin_message_show');
    });

#Treatment Image Gallery
Route::prefix('image')->group(function (){
    Route::get('create/{treatment_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
    Route::post('store/{treatment_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
    Route::get('delete/{id}/{treatment_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
    Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
});

#Review
    Route::prefix('review')->group(function (){
        Route::get('/',[ReviewController::class,'index'])->name('admin_review');
        Route::post('update/{id}',[ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}',[ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[ReviewController::class,'show'])->name('admin_review_show');
    });

    #Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

    #Faq
    Route::prefix('faq')->group(function (){
        Route::get('/',[FaqController::class,'index'])->name('admin_faq');
        Route::get('create',[FaqController::class,'create'])->name('admin_faq_add');
        Route::post('store',[FaqController::class,'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[FaqController::class,'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('show',[FaqController::class,'show'])->name('admin_faq_show');
    });

    #Rezervation
    Route::prefix('reservation')->group(function(){

        Route::get('/',[\App\Http\Controllers\Admin\RezervationController::class, 'index'])->name('admin_rezervations');
        Route::get('list/{status}',[\App\Http\Controllers\Admin\RezervationController::class, 'list'])->name('admin_rezervation_list');
        Route::get('create',[\App\Http\Controllers\Admin\RezervationController::class, 'create'])->name('admin_rezervation_add');
        Route::post('store',[\App\Http\Controllers\Admin\RezervationController::class, 'store'])->name('admin_rezervation_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\RezervationController::class, 'edit'])->name('admin_rezervation_edit');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\RezervationController::class, 'destroy'])->name('admin_rezervation_delete');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\RezervationController::class, 'update'])->name('admin_rezervation_update');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\RezervationController::class, 'show'])->name('admin_rezervation_show');
    });
    //Randevu
    Route::prefix('randevu')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\RandevuController::class, 'index'])->name('admin_randevus');
        Route::get('create', [\App\Http\Controllers\Admin\RandevuController::class, 'create'])->name('admin_randevu_add');
        Route::post('store', [\App\Http\Controllers\Admin\RandevuController::class, 'store'])->name('admin_randevu_store');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'show'])->name('admin_randevu_show');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'update'])->name('admin_randevu_update');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'edit'])->name('admin_randevu_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\RandevuController::class, 'destroy'])->name('admin_randevu_delete');
    });

    #User
    Route::prefix('user')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
        Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
        Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
        Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
        Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
        Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
    });

}); #admin
}); #auth

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[UserController::class,'destroymyreview'])->name('user_review_delete');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    #Treatment
    Route::prefix('treatment')->group(function () {
        Route::get('/', [TreatmentController::class, 'index'])->name('user_treatments');
        Route::get('create', [TreatmentController::class, 'create'])->name('user_treatment_add');
        Route::post('store', [TreatmentController::class, 'store'])->name('user_treatment_store');
        Route::get('edit/{id}', [TreatmentController::class, 'edit'])->name('user_treatment_edit');
        Route::post('update/{id}', [TreatmentController::class, 'update'])->name('user_treatment_update');
        Route::get('delete/{id}', [TreatmentController::class, 'destroy'])->name('user_treatment_delete');
        Route::get('show', [TreatmentController::class, 'show'])->name('user_treatment_show');
    });

    #Treatment Image Gallery
    Route::prefix('image')->group(function () {
        Route::get('create/{treatment_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{treatment_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{treatment_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');
    });

    //Order
    Route::prefix('order')->group(function () {

        Route::get('/', [OrderController::class, 'index'])->name('user_orders');
        //Route::get('list/{status}', [OrderController::class, 'list'])->name('user_order_list');
        Route::post('create', [OrderController::class, 'create'])->name('user_order_add');
        Route::post('store', [OrderController::class, 'store'])->name('user_order_store');
        Route::get('show', [OrderController::class, 'show'])->name('user_order_show');
        Route::post('update/{id}', [OrderController::class, 'update'])->name('user_order_update');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
        Route::get('delete/{id}', [OrderController::class, 'destroy'])->name('user_order_delete');

    });

    //Rezervation
    Route::prefix('rezervation')->group(function () {

        Route::get('/', [RezervationController::class, 'index'])->name('user_rezervations');
        Route::post('create/{treatment_id}', [RezervationController::class, 'create'])->name('user_rezervation_add');
        Route::post('store', [RezervationController::class, 'store'])->name('user_rezervation_store');
        Route::get('show/{id}', [RezervationController::class, 'show'])->name('user_rezervation_show');
        Route::post('update/{id}', [RezervationController::class, 'update'])->name('user_rezervation_update');
        Route::get('edit/{id}', [RezervationController::class, 'edit'])->name('user_rezervation_edit');
        Route::get('delete/{id}', [RezervationController::class, 'destroy'])->name('user_rezervation_delete');

    });
    //Randevu
    Route::prefix('randevu')->group(function () {

        Route::get('/', [RandevuController::class, 'index'])->name('user_randevus');
        Route::get('create', [RandevuController::class, 'create'])->name('user_randevu_add');
        Route::post('store', [RandevuController::class, 'store'])->name('user_randevu_store');
        Route::get('show/{id}', [RandevuController::class, 'show'])->name('user_randevu_show');
        Route::post('update/{id}', [RandevuController::class, 'update'])->name('user_randevu_update');
        Route::get('edit/{id}', [RandevuController::class, 'edit'])->name('user_randevu_edit');
        Route::get('delete/{id}', [RandevuController::class, 'destroy'])->name('user_randevu_delete');
    });
});
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

