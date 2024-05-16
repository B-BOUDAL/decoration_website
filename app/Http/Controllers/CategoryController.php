<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.table',[
            'categories'=>$categories
        ]);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $name = $request->name;
        $image = $request->file('image')->getClientOriginalName();
        // validation
        $request->validate([
            'name'=>'required',
        ]);
        if($request->hasFile(key:'image')){
            $request->file(key:'image')->storeAs('category',$image,'public');
        }
        // store in db
        Category::create([
          //limktob f lfo9 dyal table
            'nom' =>$name,
            'image' => $image,
        ]);
        return redirect('/admin/category');
    }
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success','category deleted successfully');
    }
//show form
//edit kathtaj id bach t afficher     create makathtajch id
    public function edit($id){
        $category = Category::find($id);
        return view('category.update',[
            'category'=>$category,
        ]);
    }

    // change data
    //edit -----------------------------------------
    public function update(Request $request){
        $id = $request->id;
        $nom = $request->nom;
        
     
        $request->validate([
            'nom'=>'required', 
        ]);
        // $this->image($request);
       
        // store in db
        $category = Category::find($id);
        $category->nom = $nom;
        if($request->hasFile(key:'image')){
            $image = $request->file('image')->getClientOriginalName();
            $request->file(key:'image')->storeAs('category',$image,'public');
            $category->image = $image;
            
        }
        $category->update();
        return redirect('/admin/category');
    }
}
