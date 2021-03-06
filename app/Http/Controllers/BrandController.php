<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Session;

class BrandController extends Controller
{
    public function add_brand(){
        return view('admin.add_controller');
    }
    //save brand
    public function save_brand(request $request){
        //brand field validation
        $request->validate([
            'brand_name' => 'required|unique:brands,brand_name|max:50',
        ]);
        //save brand to database
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = str_replace('','-',$this->slug_generator($request->brand_name));
        $brand->save();

        Session::flash('success','Brand Save Success');
        return back();
    }
    // brand edit
    public function edit_brand($id){
        $row = Brand::find($id);
        return view('admin.edit_brand',compact('row'));
    }
    //update brand
    public function update_brand(request $request){
        $brand = Brand::find($request->id);

        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = str_replace('','-',$this->slug_generator($request->brand_name));
        $brand->save();

        Session::flash('success','Brand update Success');
        return back();
    }
    public function  slug_generator($string){
        $string = str_replace(' ','-',$string);
        $string = preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-', $string));
    }
    public function managebrand(){
        $brand = Brand::OrderBy('id','DESC')->get();
        return view('admin.manage_controller',compact('brand'));
    }
    public function inactive_brand($id){
        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->save();

        Session::flash('success','Brand inactive Success');
        return back();
    }
    public function active_brand($id){
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->save();

        Session::flash('success','Brand active Success');
        return back();
    }
    //delete brand from database
    public function delete_brand($id){
        $brand = Brand::find($id);
        $brand->delete();

        Session::flash('success','Brand delete Success');
        return back();
    }
}
