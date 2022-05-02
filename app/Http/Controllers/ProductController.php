<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_list = Product::all();
        // return view('index', ['products_list' => $products_list]);

        return $products_list;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|numeric|digits_between:1,9|unique:products',
            'name' => 'required|max:50',
            'inventory' => 'required|numeric|digits_between:1,9',
            'top' => 'required|boolean',
            'image' => 'required',
            'price' => 'required|numeric|between:1,999999999.99',
        ]);

        $new_product = Product::create($request->all());
        $new_product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([   
            'code' => 'required|numeric|digits_between:1,9|unique:products,code,' . $id,
            'name' => 'required|regex:/^[0-9a-zA-ZÑñ\-_.\s]+$/|max:50',
            'inventory' => 'required|numeric|digits_between:1,9',
            'top' => 'required|boolean',
            'image' => 'required',
            'price' => 'required|numeric|between:1,999999999.99',

        ]);

        $product = product::find($id);

        $product->code = $request->code;
        $product->name = $request->name;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->inventory = $request->inventory;
        $product->top = $request->top;

        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
    }
}
