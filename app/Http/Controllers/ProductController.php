<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('products.index',['products'=>Product::latest()->paginate(3)]);

    }

    public function create()
    {
        return view('products.create');
    }

    // product store 
    public function store(Request $request)
    {
        // validata data;
         $request->validate([
            'name'=>"required",
            'description'=>"required",
            'image'=>"required|mimes:jpeg,png,jpg|max:10000"
        ]);
        // return view('products.store');
        // dd($request->all());
        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path('product'), $imageName);
        // dd($imageName);

        $product = new product();
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return back()->withSuccess("Product created successfully");

    }

    
    public function edit($id)
    {
        // dd($id); 
        $product = product::where('id',$id)->first();
        return view('products.update',['product'=>$product]);
    }

    public function update($id, Request $request)
    {
         // validata data;
         $request->validate([
            'name'=>"required",
            'description'=>"required",
            'image'=>"nullable|mimes:jpeg,png,jpg|max:10000"
        ]);

        $product = product::where('id',$id)->first();

        if(isset($request->image))
        {
            $imageName = time().".".$request->image->extension();
            $request->image->move(public_path('product'), $imageName);
            $product->image= $imageName;
        }
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return back()->withSuccess("Product updated successfully");

    }

    public function show($id)
    {
        $product = product::where('id',$id)->first();
        return view("products.product",['product'=>$product]);
    }
    
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess("Product deleted successfully");

    }
}
