<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBrngController extends Controller
{
    public function index(){
        $data = DataBarang::all();
        return view('db.index', compact(['data']));
        // dd($data);
    }

    public function create(){
        return view('db.create');
    }

    public function store(Request $request){
        DataBarang::create($request->except(['_token', 'sumbit']));
        return redirect('/data');
    }

    public function edit($id){
        $data = DataBarang::find($id);
        // dd($data);
        return view('db.edit', compact('data'));
    }

    public function update($id, Request $request){
        $data = DataBarang::find($id);
        $data->update($request->except(['_token', 'sumbit']));
        return redirect('/data');
    }

    public function destroy($id){
        $data = DataBarang::find($id);
        $data->delete();
        return redirect('/data');
    }
}
