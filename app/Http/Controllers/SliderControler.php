<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

session_start();

use Session;

class SliderControler extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $add_slider = view('admin.pages.add_slider');
        return view('admin.admin_master')->with('main_content', $add_slider);
    }

    public function saveSlider(Request $request) {
        $data = array();
        $data['publication_status'] = $request->publication_status;

        $files = $request->file('slider_image');
        $file_name = $files->getClientOriginalName();
        $file_extension = $files->getClientOriginalExtension();
        $picture = date('His') . $file_name;
        $image_url = 'public/slider_image/' . $picture;
        $destination_path = base_path() . '/public/slider_image/';
        $success = $files->move($destination_path, $picture);
        if ($success) {
            $data['slider_image'] = $image_url;
            DB::table('slider')->insert($data);
            Session::put('message', 'Slider added Successfully!');
            return Redirect::to('/add-slider');
        } else {
            $error = $files->getErrorMessage();
        }
    }

    public function manageSlider() {
        $all_slider = DB::table('slider')->get();
        $manage_slider = view('admin.pages.manage_slider')->with('all_slider', $all_slider);
        return view('admin.admin_master')->with('main_content', $manage_slider);
    }

    public function unpublishedSlider($slider_id) {
        DB::table('slider')->where('slider_id', $slider_id)->update(['publication_status' => 0]);
        return Redirect::to('/manage-slider');
    }

    public function publishedSlider($slider_id) {
        DB::table('slider')->where('slider_id', $slider_id)->update(['publication_status' => 1]);
        return Redirect::to('/manage-slider');
    }

    public function deleteSlider($slider_id) {
        DB::table('slider')->where('slider_id', $slider_id)->delete();
        return Redirect::to('/manage-slider');
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
