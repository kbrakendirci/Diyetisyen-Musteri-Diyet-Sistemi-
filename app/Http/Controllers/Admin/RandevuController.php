<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Randevu;
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
        $datalist = Randevu::all();
        return view('admin.randevus',['datalist'=>$datalist]);
    }

    public function list($status)
    {
        $datalist = Randevu::where('status',$status)->get();
        return view('admin.randevus', ['datalist' => $datalist]);
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
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function show(Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        return view('admin.randevu_edit', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function edit(Randevu $randevu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu,$id)
    {
        $data=Randevu::find($id);
        $data->status=$request->input('status');
        $data->note=$request->input('note');
        $data->save();
        return back()->with('success','Randevu updated');
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
