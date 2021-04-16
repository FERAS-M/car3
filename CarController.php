<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Models\Cars;
use DB;
use Carbon\Carbon;
class CarController extends Controller
{
   public function index()
   {
     
      
      return view('backend.allcars');
   }
   public function adcars()
   {
      return view('backend.addcar');
      
   }
   public function test()
   {
      return view('backend.layout.main');
   }
   public function test9()
   {
      $contacts=Contact::all();
      return view('backend.test1',compact('contacts'));
   }

   public function pcheck()
   {
      return "must be price >= 150 ILS";
   }
}
