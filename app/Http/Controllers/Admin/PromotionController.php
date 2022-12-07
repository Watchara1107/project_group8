<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Promotion;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
    public function index(){
        $promotion = Promotion::all();
        return view('admin.promotion.index',compact('promotion'));
    }

    public function create(){
        return view('admin.promotion.create');
    }

    public function insert(Request $request){
        $promotion = new Promotion();
        $promotion->name = $request->name;
        $promotion->price = $request->price;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/promotion/', $filename);
            Image::make(public_path() . '/admin/upload/promotion/' . $filename);
            $promotion->image = $filename;
        } else {
            $promotion->image = 'nopic.jpg';
        }
        $promotion->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('promotion.index');
    }

    public function edit($id){
        $pro = Promotion::find($id);
        return view('admin.promotion.edit',compact('pro'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $promotion = Promotion::find($id);
             // ลบรูปภาพ
            if ($promotion->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/upload/promotion/' . $promotion->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/promotion/', $filename);
            Image::make(public_path() . '/admin/upload/promotion/' . $filename);
            $promotion->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $promotion->name = $request->name;
            $promotion->price = $request->price;       
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $promotion = Promotion::find($id);
            $promotion->name = $request->name;
            $promotion->price = $request->price;
        }
        
        $promotion->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('promotion.index');
    }

    public function delete($id){
        $promotion = Promotion::find($id);
        if ($promotion->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/promotion/' . $promotion->image);
        }
        $promotion->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('promotion.index');
    }
}
