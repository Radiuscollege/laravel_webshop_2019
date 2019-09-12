<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \DB::select('SELECT * FROM products');
        return view('products/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = \DB::table('categories')
                        ->get();

        return view('products/create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::table('products')
            ->insert([
                'naam'          => $request->name,
                'prijs'         => $request->price,
                'categories_id'  => $request->categorie_id
            ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 1. id ophalen ($id) 
        // 2. 1 categorie selecteren uit database
        // 3. show template returnen met opgehaalde data

        $product = \DB::table('products')
                        ->where('id', $id)
                        ->first();              
        
        return view('products/show', ['product' => $product] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \DB::table('products')
                        ->where('id', $id)
                        ->first();

        $categories = \DB::table('categories')
                        ->get();
        
        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
            ]);
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
        // 1. ingekomen aanpassingen aanpassen op de juiste plaats
        // 2. redirecten naar show of index 
        \DB::table('products')
            ->where('id', $id)
            ->update([
                'naam'          => $request->name,
                'prijs'         => $request->price,
                'categories_id'  => $request->categorie_id
            ]);

        return redirect()->route('products.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('products')
            ->where('id', $id)
            ->delete();
        
        return redirect()->route('products.index');
    }
}
