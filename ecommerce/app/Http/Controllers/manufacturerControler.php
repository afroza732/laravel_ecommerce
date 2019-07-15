<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class manufacturerControler extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $add_manufacturer = view('admin.pages.add_manufacturer');
        return view('admin.admin_master')->with('main_content', $add_manufacturer);
    }

    public function saveManufacturer(Request $request) {
        $data = array();
        $data['manufacturer_name'] = $request->manufacturer_name;
        $data['manufacturer_description'] = $request->manufacturer_description;
        $data['publication_status'] = $request->publication_status;
        DB::table('manufacturer')->insert($data);
        Session::put('message', 'Manufacturer Save Successfully!');
        return Redirect::to('/add-manufacturer');
    }

    public function manageManufacturer() {
        $all_manufacturer = DB::table('manufacturer')->get();
        $manage_manufacturer = view('admin.pages.manage_manufacturer')->with('all_manufacturer', $all_manufacturer);
        return view('admin.admin_master')->with('main_content', $manage_manufacturer);
    }

    public function unpublishedManufacturer($manufacturer_id) {
        DB::table('manufacturer')->where('manufacturer_id', $manufacturer_id)->update(['publication_status' => 0]);
        return Redirect::to('/manage-manufacturer');
    }
    public function publishedManufacturer($manufacturer_id) {
        DB::table('manufacturer')->where('manufacturer_id', $manufacturer_id)->update(['publication_status' => 1]);
        return Redirect::to('/manage-manufacturer');
    }
     public function editManufacturer($manufacturer_id) {
        $manufacturer_info = DB::table('manufacturer')->where('manufacturer_id', $manufacturer_id)->first();
        $edit_manufacturer_page = view('admin.pages.edit_manufacturer')->with('manufacturer_info', $manufacturer_info);
        return view('admin.admin_master')->with('main_content', $edit_manufacturer_page);
    }
     public function updateManufacturer(Request $request) {
        $data = array();
        $data['manufacturer_name'] = $request->manufacturer_name;
        $data['manufacturer_description'] = $request->manufacturer_description;
        $manufacturer_id = $request->manufacturer_id;
        DB::table('manufacturer')->where('manufacturer_id', $manufacturer_id)->update($data);
        Session::put('message', 'Manufacturer Updated Successfully!');
        return Redirect::to('/manage-manufacturer');
    }

    public function deleteManufacturer($manufacturer_id) {
        DB::table('manufacturer')->where('manufacturer_id', $manufacturer_id)->delete();
        return Redirect::to('/manage-manufacturer');
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
