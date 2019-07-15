<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->search;
        $published_product = DB::table('product')
                ->orwhere('manufacturer_id','like','%'.$search.'%')
                ->orwhere('product_description','like','%'.$search.'%')
                ->orwhere('product_price','like','%'.$search.'%')
                ->orderBy('product_id', 'desc')->get();
        $published_product_all = DB::table('product')
                ->orwhere('product_model','like','%'.$search.'%')
                ->orwhere('product_description','like','%'.$search.'%')
                ->orwhere('product_price','like','%'.$search.'%')
                ->orderBy('product_id', 'desc')->get();
        $home = view('front_End.pages.home')->with('published_product',$published_product)->with('published_product_all', $published_product_all);
        return view('front_End/master')->with('main_content', $home);
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
