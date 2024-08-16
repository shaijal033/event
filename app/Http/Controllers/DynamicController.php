<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicEvent;

class DynamicController extends Controller
{
    public function index(){

        $items=DynamicEvent::select()->get();

        return view('home',compact('items'));
    }
    
    public function store(Request $request)
    {
        $data=$request->post();
        $data=['title'=>$data['title'],'description'=>$data['description'],'date'=>$data['date'],'location'=>$data['location']];
        DynamicEvent::create($data);
        return redirect(url('/aa'));
        
    }

    public function contact_delete($id){
        // echo $id;
        $contact= DynamicEvent::find($id);
        $status=$contact->delete();
        if($status){
         return redirect(url('/aa'));
        }
        return redirect(url('/aa'));
     }
 
     public function contact_edit($id){
         $data=DynamicEvent::where("id","=",$id)->first();
         $ar1=['selected_contact'=>$data];
         return view('edit')->with($ar1);
     }
 
     public function update_contact(Request $req){
         $data=$req->post();
         $data=['id'=>$data['title'],'description'=>$data['description'],'date'=>$data['date'],'location'=>$data['location']];
         DynamicEvent::where('id',$data['id'])->update($data);
      // print_r($data);
        return redirect(url('/aa'));
     }

}



