<?php

namespace App\Http\Controllers;
use \App\Product;
use \App\Category;
use Illuminate\Http\Request;

class productsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('products/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
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

        $this->validate($request, [
            'name'          => 'required|max:50',
            'price'         => 'required|numeric',
            'image'         => 'image',
            'categorie_id'  => 'required|exists:categories,id'
        ]);
        // If I have image
        if ($request->image) {
            $fileName = $request->image->getClientOriginalName();
            Product::insert([
                'name'           => $request->name,
                'price'          => $request->price,
                'image_path'     => $fileName,
                'categories_id'  => $request->categorie_id
            ]);

            $request->image->storeAs('public/images', $fileName);
        // If I don't have image
        } else {
            Product::insert([
                'name'           => $request->name,
                'price'          => $request->price,
                'categories_id'  => $request->categorie_id
            ]);
        }

//        \Mail::to( \Auth::user() )->send( new \App\Mail\TestMail($request->name) );
        return ( new \App\Mail\TestMail($request->name) )->render();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Product $product)
    {
        // 1. id ophalen ($id) 
        // 2. 1 categorie selecteren uit database
        // 3. show template returnen met opgehaalde data

        return view('products/show', ['product' => $product] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Product $product)
    {
        $categories = Category::all();
        
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
        $product = Product::find($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'categories_id' => $request->categorie_id
        ]);

        return redirect()->route('products.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(App\Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
