<?php

namespace App\Http\Controllers;

use App\Models\Randevu;
use App\Models\Rezervation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RandevuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Randevu::where('user_id',Auth::id())->get();
        return view('home.user_randevus',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Randevu::get();
        return view('home.user_randevu_add',['data'=>$data]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Randevu;
        $data->user_id = Auth::id();
        $data->diyetisyen_id = $request->input('diyetisyen_id');
        $data->kilo = $request->input('kilo');
        $data->yag_oranı = $request->input('yag_oranı');
        $data->nabız = $request->input('nabız');
        $data->email = $request->input('email');
        $data->name = $request->input('name');
        $data->months = $request->input('months');
        $data->phone = $request->input('phone');
        $data->date = $request->input('date');
        $data->IP= $_SERVER['REMOTE_ADDR'];
        $data->status='new';
        $data->save();
        return view('home.user_randevu_add',['data'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function show(Randevu $randevu)
    {
        $datalist = Randevu::where('user_id',Auth::id())->get();
        return view('home.user_randevu',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function edit(Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        return view('home.user_randevu_show',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randevu $randevu)
    {
        //
    }
}
