<?php

namespace CodeShopping\Http\Controllers;

use CodeShopping\ProductInput;
use Illuminate\Http\Request;
use CodeShopping\Http\Resources\ProductInputResource;
use CodeShopping\Http\Requests\ProductInputReuquest;

class ProductInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputs = ProductInput::with('product')->paginate();
        return ProductInputResource::collection($inputs); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInputReuquest $request)
    {
        $input = ProductInput::create($request->all());
    
        return new ProductInputResource($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \CodeShopping\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function show(ProductInput $input)
    {
        return new ProductInputResource($input);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CodeShopping\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductInput $productInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CodeShopping\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductInput $productInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CodeShopping\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductInput $productInput)
    {
        //
    }
}
