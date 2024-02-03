<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function view_category(){
        $data = category::all();
         return view('admin.category',compact('data'));
    }

    // add category
    public function add_category(Request $request){
          $data = new category;
          $data->name=$request->name;
          $data->save();
          return redirect()->back()->with('message','Category added successfully');

    }

    // delete category
    public function delete_category($id)
    {
       $data = category::find($id);
       $data->delete();
       return redirect()->back()->with('message','category deleted successfully');
    }

    public function view_product()
    {
      $category = category::all();
      return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
      $product = new product();

      $product->name = $request->name ;
      $product->description = $request->description ;
      $product->category = $request->category ;
      $product->quantity = $request->quantity ;
      $product->price = $request->price ;
      $product->discount_price = $request->discount_price ;

      $imagename = time().".".$request->image->extension();
      $request->image->move(public_path('/product'),$imagename);
      $product->image = $imagename;

      $product->save();

      return redirect()->back();
    }

    // SHOW PRODUCT
    public function show_product()
    {
      $product = product::all();
      // TODO:: print raw query
      // $product = product::all()->toSql()
      return view('admin.allProduct',compact('product'));
    }

    // Delete Product
    public function delete_product($id)
    {
       $product = product::find($id);
       $product->delete();
       return redirect()->back()->with("message",'product deleted');
    }

    // update product
    public function update_product($id)
    {
      $product = product::find($id);
      $category = category::all();
      return view('admin.update',compact('product','category'));

    }

  //  edit product
  public function edit_product(Request $request, $id)
  {
    $product = product::find($id);
    // select *from product where id != $id; 
    $product->name = $request->name;
    $product->description = $request->description;
    $product->category = $request->category;
    $product->quantity = $request->quantity;
    $product->price = $request->price;
    $product->discount_price = $request->discount_price;
    
    $image = $request->image;
    if($image)
    {
      $imagename = time().".".$request->image->extension();
      $request->image->move(public_path('/product'),$imagename);
      $product->image = $imagename;
    }
    

      $product->save();
      return redirect()->back();
  }
}
