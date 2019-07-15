<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class productControler extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->checkAuth();
        $all_category = DB::table('category')->get();
        $all_manufacturer = DB::table('manufacturer')->get();
        $add_product = view('admin.pages.add_product')->with('all_category', $all_category)->with('all_manufacturer', $all_manufacturer);
        return view('admin.admin_master')->with('main_content', $add_product);
    }

    public function saveProduct(Request $request) {
        $data = array();
        $data['product_model'] = $request->product_model;
        $data['product_price'] = $request->product_price;
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->category_id;
        $data['manufacturer_id'] = $request->manufacturer_id;
        $data['product_description'] = $request->product_description;
        $data['product_stock'] = $request->product_stock;
        $data['publication_status'] = $request->publication_status;

        $files = $request->file('product_image');
        $file_name = $files->getClientOriginalName();
        $file_extension = $files->getClientOriginalExtension();
        $picture = date('His') . $file_name;
        $image_url = 'public/product_image/' . $picture;
        $destination_path = base_path() . '/public/product_image/';
        $success = $files->move($destination_path, $picture);
        if ($success) {
            $data['product_image'] = $image_url;
            DB::table('product')->insert($data);
            Session::put('message', 'Product Save Successfully!');
            return Redirect::to('/add-product');
        } else {
            $error = $files->getErrorMessage();
        }
    }

    public function manageProduct() {
        $this->checkAuth();
        $all_product = DB::table('product')
                ->join('category', 'product.category_id', 'category.category_id')
                ->join('manufacturer', 'product.manufacturer_id', 'manufacturer.manufacturer_id')
                ->select('product.*','category.category_name','manufacturer.manufacturer_name')
                ->get();
        $manage_product = view('admin.pages.manage_product')->with('all_product', $all_product);
        return view('admin.admin_master')->with('main_content', $manage_product);
    }

   public function unpublishedProduct($product_id){
        DB::table('product')->where('product_id', $product_id)->update(['publication_status' => 0]);
        return Redirect::to('/manage-product');
    }
   public function publishedProduct($product_id){
        DB::table('product')->where('product_id', $product_id)->update(['publication_status' => 1]);
        return Redirect::to('/manage-product');
    }
   public function inactiveProduct($product_id){
        DB::table('product')->where('product_id', $product_id)->update(['product_featuerd' => 0]);
        return Redirect::to('/manage-product');
    }
   public function activeProduct($product_id){
        DB::table('product')->where('product_id', $product_id)->update(['product_featuerd' => 1]);
        return Redirect::to('/manage-product');
    }

    
    public function deleteProduct($product_id) {
        DB::table('product')->where('product_id', $product_id)->delete();
        return Redirect::to('/manage-product');
    }

    public function editProduct($product_id) {
        $this->checkAuth();
        $product_info = DB::table('product')->where('product_id', $product_id)->first();
        $all_category = DB::table('category')->get();
        $all_manufacturer = DB::table('manufacturer')->get();
        $edit_product_page = view('admin.pages.edit_product')->with('product_info', $product_info)->with('all_category', $all_category)->with('all_manufacturer', $all_manufacturer);
        return view('admin.admin_master')->with('main_content', $edit_product_page);
    }

    public function updateProduct(Request $request) {
        $data = array();
        $data['product_model'] = $request->product_model;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->category_id;
        $data['manufacturer_id'] = $request->manufacturer_id;
        $data['product_description'] = $request->product_description;
        $data['product_stock'] = $request->product_stock;
        $data['publication_status'] = $request->publication_status;
        $product_id = $request->product_id;

        if ($_FILES['product_image']['name'] == '') {
            $data['product_image'] = $request->product_image;
            DB::table('product')->where('product_id', $product_id)->update($data);
            Session::put('message', 'Product updated Successfully!');
            return Redirect::to('/manage-product');
        } else {
            $files = $request->file('product_image');
            $file_name = $files->getClientOriginalName();
            $file_extension = $files->getClientOriginalExtension();
            $picture = date('His') . $file_name;
            $image_url = 'public/product_image/' . $picture;
            $destination_path = base_path() . '/public/product_image/';
            $success = $files->move($destination_path, $picture);

            if ($success) {
                $data['product_image'] = $image_url;
                DB::table('product')->where('product_id', $product_id)->update($data);
                Session::put('message', 'Product updated Successfully!');
                //unlink($data['product_image']);
                return Redirect::to('/manage-product');
            } else {
                $error = $files->getErrorMessage();
            }
        }
    }

    public function checkAuth() {
        $admin = Session::get('admin_id');
        if ($admin) {
            return;
        } else {
            return Redirect::to('/admin')->send();
        }
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
