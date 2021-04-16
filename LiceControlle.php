<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feras;
use App\Models\Cars;

class LiceControlle extends Controller
{
   
    public function index()
    {
       
    }

   
    public function create()
    {
        return view('backend.allcars');
    }

    
     
   
    public function store1(Request $request)
    {
        $this->validate($request,[
            'carname'=>'required|max:30',
            'username'=>'required|max:50',
            'lictype'=>'required|max:15',
            'licstart'=>'required|max:50',
            'licend'=>'required|max:50',
            'price'=>'required|max:5',
        ]);
        
        Feras::create([
            "carname"=>$request->carname,
            "username"=>$request->username,
            "lictype"=>$request->lictype,
            "licstart"=>$request->licstart,
            "licend"=>$request->licend,
            "price"=>$request->price,
        ]);
                  return redirect()->back();
    }

    
    public function show()
    {
        $feras=Feras::all();
        return view('backend.managelic',compact('feras'));
    }

   
    public function edit($id)
    {
        $data=Feras::find($id);
        return view('backend.editlic',compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        $feras=Feras::find($id);
   

    
        $feras->carname=$request->carname;
        $feras->username=$request->username;
        $feras->lictype=$request->lictype;
        $feras->licstart=$request->licstart;
        $feras->licend=$request->licend;
        $feras->price=$request->price;
        $feras->update();
        return redirect()->route('seelic');
    }

   
    public function destroylic($id)
    {
        $feras=Feras::find($id);
        $feras->destroy($id) ;
        return redirect()->route('seelic');
    }
}
