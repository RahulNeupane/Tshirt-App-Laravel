<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;

class TshirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tshirts = Tshirt::all();
        return view('product.index',compact('tshirts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'batch'=>'required|numeric|unique:tshirts,batch',
            'quantity'=>'required|numeric',
            'quantity'=>'required|numeric',
            'status'=>'required',
            'remark'=>'required',
        ]);

        $tshirt = new Tshirt();
        $tshirt->batch = $request->batch;
        $tshirt->quantity = $request->quantity;
        $tshirt->status = $request->status;
        $tshirt->remark = $request->remark;

        $tshirt->save();

        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tshirt = Tshirt::findOrFail($id);
        return view('product.edit',compact('tshirt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $tshirt = Tshirt::findOrFail($id);
        if($tshirt->batch != $request->batch){
            $request->validate([
                'batch'=>'required|numeric|unique:tshirts,batch',
            ]);
        }
        $request->validate([
            'quantity'=>'required|numeric',
            'quantity'=>'required|numeric',
            'status'=>'required',
            'remark'=>'required',
        ]);

        $tshirt->batch = $request->batch;
        $tshirt->quantity = $request->quantity;
        $tshirt->status = $request->status;
        $tshirt->remark = $request->remark;

        $tshirt->update();

        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tshirt = Tshirt::findOrFail($id);
        $tshirt->delete();
        return back();
    }
}
