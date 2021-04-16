<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
   
    public function index()
    {
        return view('backend.addoffers');
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        Contact::create([
            "title"=>$request->title,
            "offers"=>$request->offers,
            
        ]);
                  return redirect()->back();
    }

  
    public function show()
    {
        $contacts=Contact::all();
        return view('backend.manageoff',compact('contacts'));
    }

   
    public function edit($id)
    {
        $data=Contact::find($id);
        return view('backend.editoff',compact('data'));
    }

   
    public function update(Request $request, $id)
    {
       
       
        $contacts=Contact::find($id);
   
        $contacts->title=$request->title;
        $contacts->offers=$request->offers;
      
        $contacts->update();
        return redirect()->route('seeoffer');
    }

  
    public function destroy($id)
    {
        $contacts=Contact::find($id);
        $contacts->destroy($id) ;
        return redirect()->route('seeoffer');
    }
}
