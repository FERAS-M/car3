<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Cars;
use App\Models\Feras;
use App\Models\Contact;
use App\Models\User;
use App\Models\Widget;
use Auth;
use Route;
use DB;
use Carbon\Carbon;
use Datatables;
use PDF;
use Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     

    public function generateDocx()
    {
        $cars=Cars::all();
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
 
    $newSection = $wordTest->addSection();
 
    $desc1 = "hiiiiiiiiiiiiiiiiiiiiiiiiiii";
 
    $newSection->addText($desc1, array('name' => 'Tahoma', 'size' => 15, 'color' => 'red'));
 
    $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
    try {
        $objectWriter->save(storage_path('TestWordFile.docx'));
    } catch (Exception $e) {
    }
 
    return response()->download(storage_path('TestWordFile.docx'));

    }
    public function exportPDF() {
            
        $cars = Cars::all();

        view()->share('cars', $cars);
        $pdf_doc = PDF::loadView('backend.testnav', $cars);

        return $pdf_doc->download(storage_path('carspdf.pdf'));
    }    

    public function index(){
        $cars=Cars::all();
        return view('backend.show',compact('cars'));
         }

         public function indexlog(){
           
            return view('auth.login');
             }
           

             public function indexmain(){

                $contacts=Contact::all();
                $cars=Cars::all();
                return view('backend.cars',compact('cars','contacts'));

                 }
                 

             public function indexreg(){
            
                return view('auth.register');
                 }

                
                 public function indexadmin()
                 {
                   
                    return view('backend.new111');
                     }  

                     public function admindash()
                     {
                        $uuser = DB::table('feras')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) >=  NOW()-INTERVAL 30 DAY')->count();
                        
                        $uuserd = DB::table('feras')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE()')->count();
                        
                        $uusery = DB::table('feras')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE() - 1')->count();
    
                        //$sum1 = DB::table('users')->select(DB::raw('count(*) '))->count();
    
                        $sum = DB::table('users')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) >=  NOW()-INTERVAL 30 DAY')->count();

                        $sumd = DB::table('users')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE()')->count();

                        $sumy =  DB::table('users')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE() - 1')->count();

    
                       
                        $car = DB::table('cars')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) >=  NOW()-INTERVAL 30 DAY')->count();

                        $card = DB::table('cars')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE()')->count();
                       
                        $cary =  DB::table('cars')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE() - 1')->count();


    
                        $con = DB::table('contacts')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) >=  NOW()-INTERVAL 30 DAY')->count();

                        $cond = DB::table('contacts')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE()')->count();

                        $cony =  DB::table('contacts')->select(DB::raw('*'))
                        ->whereRaw('Date(created_at) = CURDATE() - 1')->count();

    
                        return view('backend.admin-dash',compact('uuser','uuserd','uusery','sum','sumd','sumy','car','card','cary','con','cond','cony'));
                         }  
                     
                    
    public function usertbl()
    {
        
        $users=User::all();

        return view('backend.maneguser',compact('users'));
    }


    public function datatable1()
    {
        
        $users=User::all();

        return view('backend.zzz',compact('users'));
    }

    public function create()
    {
        return view('backend.addcar');
    }
   
    public function tbltest()
    {
        $cars=Cars::all();
        return view('backend.testnav',compact('cars'));
    }
   



   
    public function store(Request $request)
    {

      if($request->hasFile('photo')){

          $file=$request->photo;
          $new_file=time().$file->getClientOriginalName();
          $file->move('storage/car-imgs',$new_file);
      }
          Cars::create([
              "name"=>$request->name,
              "model"=>$request->model,
              "cochear"=>$request->cochear,
              "pdate"=>$request->pdate,
              "photo"=>'/storage/car-imgs/'.$new_file,
              "user_id"=>Auth::id(),
          ]);
                    return redirect()->back();
      }


      public function storeuser(Request $request)
    {

     
        User::create([
              "name"=>$request->name,
              "email"=>$request->email,
              "password"=>$request->password,
              
          ]);
                    return view('backend.login');
      }
     
  

      public function exite1(){
       Auth::logout();
       return view('auth.login');
     }
    
     public function edit($id)
     {
         $data=Cars::find($id);
         return view('backend.editcar',compact('data'));
     }


      public function usersedit($id)
     {
         $data=User::find($id);
         return view('backend.edituser',compact('data'));
     }
    
    public function update(Request $request, $id)
    {
        $cars=Cars::find($id);
    if($request->hasFile('photo'))
    {

        $file=$request->photo;
        $new_file=time().$file->getClientOriginalName();
        $file->move('storage/car-imgs',$new_file);

        $cars->photo='/storage/car-imgs/'.$new_file;
    }

    
    $cars->name=$request->name;
    $cars->model=$request->model;
    $cars->cochear=$request->cochear;
    $cars->pdate=$request->pdate;
    $cars->update();
    return redirect()->route('seecars');
    }


    public function usersupdate(Request $request, $id)
    {
        $users=User::find($id);
   

    
    $users->name=$request->name;
    $users->email=$request->email;
    $users->created_at=$request->created_at;
    $users->rol3=$request->rol3;
    $users->update();
    return redirect()->route('seeusers');
    }
    



   
  
    
   public function destroy($id)
   {
    $cars=Cars::find($id);
    $cars->destroy($id) ;
    return redirect()->route('seecars');
   }
   

   public function userdestroy($id)
   {
    $user=User::find($id);
    $user->delete($id) ;
    return redirect()->route('seeusers');
   }

  
 
}