<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination;

class WelcomeControler extends Controller {

    public function index() {
        
        //$published_product = DB::table('product')->where('publication_status', 1)->orderBy('product_id', 'desc')->limit(2)->get();
        //$published_product_all = DB::table('product')->where('publication_status', 1)->orderBy('product_id', 'desc')->get();
        $home = view('front_End.pages.home');
        return view('front_End/master')->with('main_content', $home);
    }

    public function product() {
        $published_product_all = DB::table('product')
                ->join('category', 'product.category_id', 'category.category_id')
                ->join('manufacturer', 'product.manufacturer_id', 'manufacturer.manufacturer_id')
                ->where('product.publication_status', 1)
                ->orderBy('product_id', 'desc')
                ->limit(8)
                ->paginate(4);
        $product = view('front_End.pages.product')->with('published_product_all', $published_product_all);
        return view('front_End/master')->with('main_content', $product);
    }

    public function topBrands() {
        $published_product_all = DB::table('product')
                ->join('category', 'product.category_id', 'category.category_id')
                ->join('manufacturer', 'product.manufacturer_id', 'manufacturer.manufacturer_id')
                ->select('product.*', 'category.category_name', 'manufacturer.manufacturer_name')
                ->where('product.publication_status', 1)
                ->orderBy('product_id', 'desc')
                ->limit(3)
                ->get();
        $service = view('front_End.pages.topBrands')->with('published_product_all', $published_product_all);
        return view('front_End/master')->with('main_content', $service);
    }

    public function contact() {
        $contact = view('front_End.pages.contact');
        return view('front_End/master')->with('main_content', $contact);
    }

    //show category
    public function showProductCategory($category_id) {
        $show_product_by_category = DB::table('product')
                ->join('category', 'product.category_id', 'category.category_id')
                ->select('product.*', 'category.category_name')
                ->where('category.category_id', $category_id)
                ->where('product.publication_status', 1)
                ->limit(4)
                ->get();
        $product_by_category = view('front_End.pages.show_product_category')->with('show_product_by_category', $show_product_by_category);
        return view('front_End/master')->with('main_content', $product_by_category);
    }

    //product details

    public function details($product_id) {
        $product_info = DB::table('product')
                ->join('category', 'product.category_id', 'category.category_id')
                ->join('manufacturer', 'product.manufacturer_id', 'manufacturer.manufacturer_id')
                ->select('product.*', 'category.category_name', 'manufacturer.manufacturer_name')
                ->where('product.product_id', $product_id)
                ->where('product.publication_status', 1)
                ->first();
        $all_category = DB::table('category')->get();
        $add_to_cart = view('front_End.pages.details')->with('product_info', $product_info)->with('all_category', $all_category);
        return view('front_End/master')->with('main_content', $add_to_cart);
    }

}
