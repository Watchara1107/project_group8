<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $room = Room::all();
        return view('admin.room.index',compact('room'));
    }

    public function create(){
        return view('admin.room.create');
    }

    public function insert(Request $request){
        $room = new Room();
        $room->name = $request->name;
        $room->price = $request->price;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/room/', $filename);
            Image::make(public_path() . '/admin/upload/room/' . $filename);
            $room->image = $filename;
        } else {
            $room->image = 'nopic.jpg';
        }
        $room->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('room.index');
    }

    public function edit($id){
        $room = Room::find($id);
        return view('admin.room.edit',compact('room'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $room = Room::find($id);
             // ลบรูปภาพ
            if ($room->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/upload/room/' . $room->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/room/', $filename);
            Image::make(public_path() . '/admin/upload/room/' . $filename);
            $room->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $room->name = $request->name;
            $room->price = $request->price;       
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $room = Room::find($id);
            $room->name = $request->name;
            $room->price = $request->price;
        }
        
        $room->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('room.index');
    }

    public function delete($id){
        $room = Room::find($id);
        if ($room->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/room/' . $room->image);
        }
        $room->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('room.index');
    }
}
