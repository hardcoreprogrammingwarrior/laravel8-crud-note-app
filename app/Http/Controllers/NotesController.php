<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function index(){
        $o = Notes::all();

        return view('welcome', compact("o"));
    }

    public function store(Request $request){
        Notes::create($request->all());

        return redirect()->back();
    }

    public function destroy($id){
        Notes::where('id',$id)->delete();
        return redirect()->back();
    }
}
