<?php

namespace App\Http\Controllers;

use App\Models\Rezervation;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Rezervation::where('user_id',Auth::id())->get();
        return view('home.user_rezervations',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$treatment_id)
    {
        $data = Treatment::find($treatment_id);
        return view('home.user_rezervation_add',['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Rezervation $rezervation)
    {
        $data = new Rezervation;
        $data->user_id = Auth::id();
        $data->treatment_id =$request->input('treatment_id');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->months = $request->input('months');
        $data->phone = $request->input('phone');
        $data->price = $request->input('price');
        $data->startdate = $request->input('startdate');
        $data->enddate= $request->input('enddate');
        $data->IP= $_SERVER['REMOTE_ADDR'];
        $data->status='new';
        $data->save();
        return view('home.user_rezervation_add',['data'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervation $rezervation)
    {
        $datalist = Rezervation::where('user_id',Auth::id())->get();
        return view('home.user_rezervations',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervation $rezervation,$id)
    {
        $data = Rezervation::find($id);
        return view('home.user_reservation_show',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervation $rezervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervation $rezervation)
    {
        //
    }
}
