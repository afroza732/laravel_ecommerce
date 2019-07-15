<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;

session_start();

class categoryControler extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $add_category = view('admin.pages.add_category');
        return view('admin.admin_master')->with('main_content', $add_category);
    }

    public function saveCategory(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;
        DB::table('category')->insert($data);
        Session::put('message', 'Category Save Successfully!');
        return Redirect::to('/add-category');
    }

    public function manageCategory() {
        $all_category = DB::table('category')->get();
        $manage_category = view('admin.pages.manage_category')->with('all_category', $all_category);
        return view('admin.admin_master')->with('main_content', $manage_category);
    }

    public function unpublishCategory($category_id) {
        DB::table('category')->where('category_id', $category_id)->update(['publication_status' => 0]);
        return Redirect::to('/manage-category');
    }

    public function publishCategory($category_id) {
        DB::table('category')->where('category_id', $category_id)->update(['publication_status' => 1]);
        return Redirect::to('/manage-category');
    }

    public function editCategory($category_id) {
        $category_info = DB::table('category')->where('category_id', $category_id)->first();
        $edit_category_page = view('admin.pages.edit_category')->with('category_info', $category_info);
        return view('admin.admin_master')->with('main_content', $edit_category_page);
    }

    public function updateCategory(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $category_id = $request->category_id;
        DB::table('category')->where('category_id', $category_id)->update($data);
        Session::put('message', 'Category Updated Successfully!');
        return Redirect::to('/manage-category');
    }

    public function deleteCategory($category_id) {
        DB::table('category')->where('category_id', $category_id)->delete();
        return Redirect::to('/manage-category');
    }

    public function checkAuth() {
        $admin = Session::get('admin_id');
        if ($admin) {
            return;
        } else {
            return Redirect::to('/admin')->send();
        }
    }

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
