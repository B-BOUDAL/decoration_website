<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Commande;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $commandes = Commande::all();
        return view('commande.table',[
            'commandes'=>$commandes
        ]);
    }
    //show form
    public function create(){
        $commandes = Commande::all();
        return view('commande.create',[
            'commandes'=>$commandes
        ]);
    }
    // change data
    public function store(Request $request){
        $nom = $request->nom;
        $category = $request->category;
        $product = $request->product;
        $description = $request->description;
        $category = $request->category;
        // validation
        $request->validate([
            'nom'=>'required',
        ]);
        // $this->image($request);
        
        // store in db
        Product::create([
          //limktob f lfo9 dyal table
          'client_id'=>'required', 
          'product_id'=>'required', 
          'quantite'=>'required', 
          'total'=>'required', 
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
        $client_id = $request->client_id;
        $product_id = $request->product_id;
        $quantite = $request->quantite;
        $total = $request->total;
        // validation
        $request->validate([
            'client_id'=>'required', 
            'product_id'=>'required', 
            'quantite'=>'required', 
            'total'=>'required', 
        ]);
        // $this->image($request);
       
        // store in db
        $commandes = commande::find($id);
        $commandes->update([
          //limktob f lfo9 dyal table
          'client_id' => $request->client_id,
          'product_id' => $request->product_id,
          'quantite' => $request->quantite,
          'total' => $request->total,
      
              ]);
        

        return redirect('/admin/commande');
    }
    
}