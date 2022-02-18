<?php

namespace App\Http\Controllers;

use App\Models\Datper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datpers = Datper::all();
       // $datpers = DB::table('datpers')->get();
        return response()->json($datpers);
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
        $datper = Datper::create($request->post());
        return response()->json([
            'datper'=>$datper,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Datper $datper)
    {
        return response()->json($datper);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datper $datper)
    {
        $datper->fill($request->post())->save();
        return response()->json([
            'datper'=>$datper
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datper $datper)
    {
        $datper->delete();
        return response()->json([
            'mensaje'=> 'campo eliminado'
        ]);
    }
}
