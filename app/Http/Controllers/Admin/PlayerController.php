<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Player;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    public function index(){
        $player = Player::all();
        return view('admin.player.index',compact('player'));
    }

    public function create(){
        return view('admin.player.create');
    }

    public function insert(Request $request){
        $player = new Player();
        $player->name = $request->name;
        $player->price = $request->price;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/player/', $filename);
            Image::make(public_path() . '/admin/upload/player/' . $filename);
            $player->image = $filename;
        } else {
            $player->image = 'nopic.jpg';
        }
        $player->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('player.index');
    }

    public function edit($id){
        $play = Player::find($id);
        return view('admin.player.edit',compact('play'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $player = Player::find($id);
             // ลบรูปภาพ
            if ($player->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/upload/player/' . $player->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/admin/upload/player/', $filename);
            Image::make(public_path() . '/admin/upload/player/' . $filename);
            $player->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $player->name = $request->name;
            $player->price = $request->price;       
        } else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $player = Player::find($id);
            $player->name = $request->name;
            $player->price = $request->price;
        }
        
        $player->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('player.index');
    }

    public function delete($id){
        $player = Player::find($id);
        if ($player->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/player/' . $player->image);
        }
        $player->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('player.index');
    }
}
