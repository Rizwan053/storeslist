<?php

namespace App\Http\Controllers;

use App\Store;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('owner.products.index',compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $store = Store::pluck('name','id')->all();
        return view('owner.products.add',compact('store'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'image'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);

        $input = $request->all();
        if($file = $input['image']){
            $name = $file->getClientOriginalName();
            $input['image']=$name;
            $file->move('img',$name);
            $product = new Product();
            $product->create($input)->save();
        }
        return redirect()->route('products.index');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id vvchjf
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::pluck('name', 'id')->all();

        $product = Product::findorFail($id);
        return view('owner.products.edit', compact('product','store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validation = $request->validate([
            'name' => 'required',
            // 'image' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $input = $request->all();
        if ($file = $request->file['image']) {
            $name = $file->getClientOriginalName();
            $input['image'] = $name;
            $file->move('img', $name);
        }
        $product = new Product();
        $product->update($input);

        return redirect()->route('products.index')->withUpdate('Product Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::findorFail($id);
        unlink(public_path().'/img/'.$pro->image);
        $pro->delete();
        return redirect()->back()->withDelete("Product Deleted Succesfully");
    }
}
