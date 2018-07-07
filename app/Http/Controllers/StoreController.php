<?php

namespace App\Http\Controllers;

use App\Store;
use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('owner.stores.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.stores.add');
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
                'address'=>'required',
        ]);

            $input = $request->all();
        if ($file = $input['image']) {
            $name = $file->getClientOriginalName();
            $input['image'] = $name;
            $file->move('str_img', $name);
        }
        $store = new Store();
        $store->create($input);
        return redirect()->route('products.create')->withOrder('Add Some Product to Store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stores = Store::findorFail($id);
        return view('owner.stores.edit', compact('stores'));
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
            'address' => 'required',
            
        ]);

        $input = $request->all();
        if ($file = $request->file['image']) {
            $name = $file->getClientOriginalName();
            $input['image'] = $name;
            $file->move('str_img', $name);
        }
        $store = new Store();
        $store->update($input);

        return redirect()->route('stores.index')->withUpdate('Stores Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::findorFail($id);
        $product = Product::firstorfail()->where('store_id', $id);
        // unlink(public_path() . '/img/' . $product->image);
        $product->delete();
        unlink(public_path() . '/str_img/' . $store->image);
        $store->delete();
        return redirect()->back()->withDelete("Store Deleted Succesfully");


       
    }
}
