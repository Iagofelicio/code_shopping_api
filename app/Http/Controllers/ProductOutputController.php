<?php

namespace CodeShopping\Http\Controllers;

use CodeShopping\ProductOutput;
use Illuminate\Http\Request;
use CodeShopping\Http\Resources\ProductOutputResource;
use CodeShopping\Http\Requests\ProductOutputReuquest;

class ProductOutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outputs = ProductOutput::with('product')->paginate();
        return ProductOutputResource::collection($outputs); 
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
    public function store(ProductOutputReuquest $request)
    {
        $output = ProductOutput::create($request->all());
        return new ProductOutputResource($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  \CodeShopping\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOutput $output)
    {
        return new ProductOutputResource($output);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CodeShopping\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOutput $productOutput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CodeShopping\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductOutput $productOutput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CodeShopping\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOutput $productOutput)
    {
        //
    }
}
