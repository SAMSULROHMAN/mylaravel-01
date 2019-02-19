<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index() {
        return view('karyawan');
    }

    public function store(Request $request) {
        $karyawan = new Karyawan();
        $karyawan->name = $request->input('name');
        $karyawan->email = $request->input('email');
        $karyawan->post = $request->input('post');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting the extension
            $filename = time(). '.' . $extension;
            $file->move('upload/karyawan/', $filename);
            $karyawan->image = $filename;
        } else {
            return $request;
            $karyawan->image = '';
        }

        $karyawan->save();

        return view('karyawan')->with('karyawan',$karyawan);

    }
    public function display() {
        $karyawan = Karyawan::all();
        return view('karyawanform')->with('karyawan',$karyawan);
    }
    public function edit($id) {
        $karyawan = Karyawan::find($id);
        return view('karyawanupdateform')->with('karyawan',$karyawan);
    }
    public function update(Request $request, $id) {
        //function create + function edit = function update
        $karyawan = Karyawan::find($id);

        $karyawan->name = $request->input('name');
        $karyawan->email = $request->input('email');
        $karyawan->post = $request->input('post');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting the extension
            $filename = time(). '.' . $extension;
            $file->move('upload/karyawan/', $filename);
            $karyawan->image = $filename;
        } else {
            return $request;
            $karyawan->image = '';
        }

        $karyawan->save();

        return redirect('/karyawanpage')->with('karyawan',$karyawan);
    }

    public function delete($id) {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawanpage')->with('karyawan',$karyawan);
    }
}
