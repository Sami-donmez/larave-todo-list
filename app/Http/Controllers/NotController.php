<?php

namespace App\Http\Controllers;

use App\Models\Not;
use Illuminate\Http\Request;

class NotController extends Controller
{
    public function index()
    {
        $data=Not::all();
        return view('welcome',['data'=>$data]);
    }

    public function addIndex()
    {
        return view('add');
    }

    public function updateIndex($id,Request $request){
        $data=Not::find($id);
        return view('update',['data'=>$data]);
    }

    public function update($id,Request $request)
    {
        $validate = $request->validate([
            "not" => "required"
        ]);
        $not=Not::find($id);
        $not->not=$request->get('not');
        $not->kategori_id=$request->get('kategori');
        $not->save();
        return redirect(url()->to('/'))->with('success', 'Güncelleme başarılı.');
    }

    public function delete($id,Request $request)
    {
        $not=Not::find($id);
        $not->delete();
        return redirect(url()->to('/'))->with('success', 'Silme başarılı.');
    }

    public function add(Request $request)
    {
        $validate = $request->validate([
            "not" => "required"
        ]);
        $not=new  Not();
        $not->not=$request->get('not');
        $not->kategori_id=$request->get('kategori');
        $not->save();
        return redirect(url()->to('/'))->with('success', 'Ekleme başarılı.');
    }
}
