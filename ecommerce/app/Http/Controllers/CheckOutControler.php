<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use Cart;

class CheckOutControler extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contact = view('front_End.pages.checkout');
        return view('front_End/master')->with('main_content', $contact);
    }

    public function checkOutRegistration(Request $request) {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = md5($request->password);
        $customer_id = DB::table('customer')->insertGetId($data);

        if ($customer_id) {
            Session::put('customer_id', $customer_id);
            Session::put('customer_name', $request->customer_name);
            return Redirect::to('/shipping-info');
        } else {
            return Redirect::to('/checkout');
        }
    }

    public function customerLogin(Request $request) {
        $email_address = $request->email_address;
        $password = $request->password;
        $result = DB::table('customer')->where('email_address', $email_address)->where('password', md5($password))->first();
        if ($result) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            return Redirect::to('/shipping-info');
        } else {
            return Redirect::to('/checkout');
        }
    }

    public function customerlogout() {
        Session::put('customer_name', '');
        Session::put('customer_id', '');
        Session::put('message', 'You are successfully Logout!');
        return Redirect::to('/checkout');
    }

    public function billingAddress() {
        $billing = view('front_End.pages.biling_address');
        return view('front_End/master')->with('main_content', $billing);
    }

    public function shippingAddress() {
        $shipping = view('front_End.pages.shipping');
        return view('front_End/master')->with('main_content', $shipping);
    }

    public function shippingSave(Request $request) {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = md5($request->password);
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['country'] = $request->country;
        $data['zip_code'] = $request->zip_code;

        $shipping_id = DB::table('shipping')->insertGetId($data);
        if ($shipping_id != null) {
            Session::put('shipping_id', $shipping_id);
            return Redirect::to('/payment');
        } else {
            return Redirect::to('/shipping-info');
        }
    }

    public function payment() {
        $payment = view('front_End.pages.payment');
        return view('front_End/master')->with('main_content', $payment);
    }

    public function orderPlace(Request $request) {
        $payment_gateway = $request->payment_method;
        $pdata = array();

        $pdata['payment_method'] = $payment_gateway;
        $pdata['payment_status'] = 'pending';
        $payment_id = DB::table('payment')->insertGetId($pdata);

        $odata = array();
        $odata['customer_id'] = Session::get('customer_id');
        $odata['shipping_id'] = Session::get('shipping_id');
        $odata['payment_id'] = $payment_id;
        $odata['order_total'] = Cart::total();
        $odata['order_status'] = 'pending';
        $order_id = DB::table('order')->insertGetId($odata);

        $contents = Cart::content();
        $oddata = array();

        foreach ($contents as $v_contents) {
            $oddata['order_id'] = $order_id;
            $oddata['product_id'] = $v_contents->id;
            $oddata['product_name'] = $v_contents->name;
            $oddata['product_price'] = $v_contents->price;
            $oddata['product_sales_quantity'] = $v_contents->qty;
            DB::table('order_details')->insert($oddata);
        }

        if ($payment_gateway == 'handcash') {
            Cart::destroy();
            return Redirect::to('/handcash');
        } elseif ($payment_gateway == 'bkash') {
            echo 'Bkash';
        } elseif ($payment_gateway == 'paypal') {
            echo 'Paypal';
        } elseif ($payment_gateway == 'payza') {
            echo 'Payza';
        }
    }

    public function handCash() {
        $handCash = view('front_End.pages.handcash');
        return view('front_End/master')->with('main_content', $handCash);
    }

    public function manageOrder() {
        $all_order = DB::table('order')
                ->join('customer', 'order.customer_id', 'customer.customer_id')
                ->select('order.*', 'customer.customer_name')
                ->get();
        $manage_order = view('admin.pages.manage_order')->with('all_order', $all_order);
        return view('admin.admin_master')->with('main_content', $manage_order);
    }

    public function viewOrder($order_id) {
        $all_order_details = DB::table('order')
                ->join('customer', 'order.customer_id', '=', 'customer.customer_id')
                ->join('order_details', 'order.order_id', '=', 'order_details.order_id')
                ->join('shipping', 'order.shipping_id', '=', 'shipping.shipping_id')
                ->select('order.*', 'order_details.*', 'shipping.*','customer.*')
                ->first();
        $order_details = view('admin.pages.order_details')->with('all_order_details', $all_order_details);
        return view('admin.admin_master')->with('main_content', $order_details);
    }

    public function create() {
        //
    }

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
