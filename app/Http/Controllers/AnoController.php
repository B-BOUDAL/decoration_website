<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class AnoController extends Controller
{
    public function index(){
        $annonce = Annonce::all();
        return view('annonce.table',[
            'annonce'=>$annonce
        ]);
    }
    //show form
    public function create(){
        $annonce = Annonce::all();
        return view('annonce.create',[
            'annonce'=>$annonce
        ]);
    }
    // change data
    public function store(Request $request){
       
        $image = $request->file('image')->getClientOriginalName();
        $date_debut = $request->date_debut;
        $date_fin = $request->date_fin;
        
        // validation
        $request->validate([
            'image'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
        ]);
        // $this->image($request);
        if($request->hasFile(key:'image')){
            $request->file(key:'image')->storeAs('annonce',$image,'public');
        }
        // store in db
        Annonce::create([
          //limktob f lfo9 dyal table
          
          'image' => $image,
          'date_debut' => $request->date_debut,
          'date_fin' => $request->date_fin,
        ]);
        return redirect('/admin/annonce');
    }

    public function destroy($id){
        $annonce = Annonce::find($id);
        $annonce->delete();
        return redirect()->route('annonce.index')->with('success','annonce deleted successfully');
    }
//show form
//edit kathtaj id bach t afficher     create makathtajch id
    public function edit($id){
        $annonce = Annonce::find($id);
        return view('annonce.update',[
            'annonce'=>$annonce,
        ]);
    }

    // change data
    //edit -----------------------------------------
    public function update(Request $request){
        $id = $request->id;        
        $image = $request->image;        
        $date_debut = $request->date_debut;
        $date_fin = $request->date_fin;
        // validation
        $request->validate([
            'image'=>'required', 
            'date_debut'=>'required', 
            'date_fin'=>'required', 
        ]);
        // $this->image($request);
       
        // store in db
        $annonce = Annonce::find($id);
        $annonce->update([
          //limktob f lfo9 dyal table
          'image' => $image,
          'date_debut' => $request->date_debut,
          'date_fin' => $request->date_fin,
        ]);
        if($request->hasFile(key:'image')){
            $image = $request->file('image')->getClientOriginalName();
            $request->file(key:'image')->storeAs('annonce',$image,'public');
            $annonce->update([
                'image' => $image,
              ]);
        }

        return redirect('/admin/annonce');
    }
    
}