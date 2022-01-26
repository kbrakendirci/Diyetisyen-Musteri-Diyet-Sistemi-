<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public static function countreview($id)
    {
        return \App\Models\Review::where('treatment_id', $id)->count();
    }

    public static function avrgreview($id)
    {
        return \App\Models\Review::where('treatment_id', $id)->average('rate');
    }

    public function index()
    {
        #Verileri tek bir liste halinde alır
        $setting = Setting::first();
        $slider= Treatment::select('id','title','image','price','description')->Limit(3)->get();
        $popular_diet= Treatment::select('id','title','image','price','description')->Limit(3)->inRandomOrder()->get();
        $last= Treatment::select('id','title','image','price','description')->Limit(3)->orderByDesc('id')->get();
        $review = \App\Models\Review::select('user_id','treatment_id','subject','review','rate','created_at')->limit(3)->inRandomOrder()->get();
        $faq = Faq::select('question','answer')->limit(1)->inRandomOrder()->get();
        #print_r($last);
        #exit();
        $data=[
            'setting' => $setting,
            'slider'  => $slider,
            'popular_diet'  => $popular_diet,
            'last'  => $last,
            'review' => $review,
            'faq'=>$faq,
            'page'    => 'home'
        ];
        return view('home.index',$data);
    }

    public function gettreatment(Request $request)
    {
        $data = Treatment::where('title',$request->input('search'))->first();
        return redirect()->route('treatment',['id'=>$data->id]);
    }
    public function getimage(Request $request)
    {
        $datalist = Treatment::all();
        return view('home.images',['datalist'=>$datalist]);
    }
    public function treatment($id)
    {
        $data = Treatment::find($id);
        $datalist = Image::where('treatment_id',$id)->get();
        $reviews = \App\Models\Review::where('treatment_id',$id)->get();
        #print_r($data);
        #exit();

        return view('home.treatment_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function alldiet()
    {
        $datalist = Treatment::all();
        return view('home.all_diet',['datalist'=>$datalist]);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
        //return view('home.about');
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Mesajınız Kaydedildi. Teşekkür Ederiz.');
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not ']);
        }
        else
        {
            return view('admin.login');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //return view('admin.login');
        return redirect('/');
    }
    public function categorytreatment($id)
    {
        $datalist = Treatment::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.categorytreatment',['data'=>$data,'datalist'=>$datalist]);
    }
}
