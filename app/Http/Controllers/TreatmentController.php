<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Treatment::where('user_id',Auth::id())->get();
        return view('home.user_treatments',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datalist = Category::with('children')->get();
        return view('home.user_treatment_add',['datalist' => $datalist]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Treatment;
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->category_id=$request->input('category_id');
        $data->user_id= Auth::id();//user idyi getirir
        $data->price=$request->input('price');
        $data->detail=$request->input('detail');
        $data->status=$request->input('status');
        $data->illness=$request->input('illness');
        $data->type_of_process=$request->input('type_of_process');
        $data->age_range=$request->input('age_range');
        $data->target=$request->input('target');
        $data->type_of_diet=$request->input('type_of_diet');//vegan - vejeteryan
        $data->athlete=$request->input('athlete');
        $data->image= Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('user_treatments')->with('success','Treatment Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment,$id)
    {
        $data = Treatment::find($id);
        $datalist = Category::with('children')->get();
        return view('home.user_treatment_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment,$id)
    {
        $data = Treatment::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->category_id=$request->input('category_id');
        $data->user_id= Auth::id();//user idyi getirir
        $data->price=$request->input('price');
        $data->detail=$request->input('detail');
        $data->status=$request->input('status');
        $data->illness=$request->input('illness');
        $data->type_of_process=$request->input('type_of_process');
        $data->age_range=$request->input('age_range');
        $data->target=$request->input('target');
        $data->type_of_diet=$request->input('type_of_diet');//vegan - vejeteryan
        $data->athlete=$request->input('athlete');
        if($request->file('image')!=null)
        {
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('user_treatments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment,$id)
    {
        //DB::table('products')->where('id','=',$id)->delete();
        $data = Treatment::find($id);
        $data->delete();
        return redirect()->route('user_treatments');
    }
}
