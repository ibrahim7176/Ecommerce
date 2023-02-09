<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\product;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function catagory()
    {
        $data = catagory::all();
        return view('admin.catagory', compact('data'));
    }
    public function add_catagory(Request $request)
    {
        $catagory = new catagory();
        $catagory->catagory_name = $request->catagory;
        $catagory->save();
        return redirect()->back();
    }
    public function delete_catagry($id)
    {
        $data = catagory::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function view_products()
    {
        $catagory = catagory::all();
        return view('admin.product', compact('catagory'));
    }
    public function add_product(Request $request)
    {
        // product::create($request->all());
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;
        $product->category = $request->catagory;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;

        $product->save();
        return redirect()->back();
    }
    public function show_products()
    {
        $products =  product::all();
        return view('admin.show_products', compact('products'));
    }
}
