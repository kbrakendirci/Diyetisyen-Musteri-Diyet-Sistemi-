<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rezervation;
use Illuminate\Http\Request;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Rezervation::all();
        return view('admin.rezervations', ['datalist' => $datalist]);
    }
    public function list($status)
    {
        $datalist = Rezervation::where('status',$status)->get();
        return view('admin.rezervations', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervation $rezervation,$id)
    {
        $data = Rezervation::find($id);
        return view('admin.rezervation_edit', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervation $rezervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervation $rezervation,$id)
    {
        $data=Rezervation::find($id);
        $data->status=$request->input('status');
        $data->note=$request->input('note');
        $data->save();
        return back()->with('success','Reservation updated');
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
