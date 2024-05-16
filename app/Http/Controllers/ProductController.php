<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.table',[
            'products'=>$products
        ]);
    }
    //show form
    public function create(){
        $categories = Category::all();
        return view('products.create',[
            'categories'=>$categories
        ]);
    }
    // change data
    public function store(Request $request){
        $nom = $request->nom;
        $image = $request->file('image')->getClientOriginalName();
        $prix = $request->prix;
        $description = $request->description;
        $category = $request->category;
        // validation
        $request->validate([
            'nom'=>'required',
        ]);
        // $this->image($request);
        if($request->hasFile(key:'image')){
            $request->file(key:'image')->storeAs('product',$image,'public');
        }
        // store in db
        Product::create([
          //limktob f lfo9 dyal table
          'nom' => $request->nom,
          'image' => $image,
          'prix' => $request->prix,
          'description' => $request->description,
          'category_id' => $request->category,
        ]);
        return redirect('/admin/products');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success','product deleted successfully');
    }
//show form
//edit kathtaj id bach t afficher     create makathtajch id
    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.update',[
            'categories'=>$categories,
            'product'=>$product,
        ]);
    }

    // change data
    //edit -----------------------------------------
    public function update(Request $request){
        $id = $request->id;
        $nom = $request->nom;
        
        $prix = $request->prix;
        $description = $request->description;
        $category = $request->category;
        // validation
        $request->validate([
            'nom'=>'required', 
        ]);
        // $this->image($request);
       
        // store in db
        $product = Product::find($id);
        $product->update([
          //limktob f lfo9 dyal table
          'nom' => $request->nom,
          'prix' => $request->prix,
          'description' => $request->description,
          'category_id' => $request->category,
        ]);
        if($request->hasFile(key:'image')){
            $image = $request->file('image')->getClientOriginalName();
            $request->file(key:'image')->storeAs('product',$image,'public');
            $product->update([
                'image' => $image,
              ]);
        }

        return redirect('/admin/products');
    }
    
}