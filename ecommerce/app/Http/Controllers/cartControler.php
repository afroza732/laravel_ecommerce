<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\Support\Facades\Redirect;

class cartControler extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function addToCart($product_id) {
        $product_info = DB::table('product')->where('product_id', $product_id)->first();
        $data = array();
        $data['id'] = $product_info->product_id;
        $data['name'] = $product_info->product_model;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_quantity;
        $data['qty'] = 1;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        return Redirect::to('/cart');
    }

    public function cart() {
        $cart = view('front_End.pages.cart');
        return view('front_End/master')->with('main_content', $cart);
    }

    public function updateToCart(Request $request) {
        $qty = $request->qty;
        $rowId = $request->rowId;
        Cart::update($rowId,$qty);
        return Redirect::to('/cart');
    }

    public function deletToCart($rowId) {
        Cart::remove($rowId);
        return Redirect::to('/cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
