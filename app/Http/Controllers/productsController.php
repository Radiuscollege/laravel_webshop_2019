<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     * verantwoordelijk voor de master page
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1. alle producten ophalen uit de database
        //2. view returnen met daarbij de opgehaalde data
        
        $products = \DB::select('SELECT * FROM products');
        return $products[2]->prijs;

    }

    /**
     * Show the form for creating a new resource.
     * verantwoordelijk voor het tonen van een aanmaakform.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Ik verzorg straks een create product form...';
    }

    /**
     * Store a newly created resource in storage.
     * verantwoordelijk voor het opslaan van een nieuw product.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * verantwoordelijk voor het tonen van een detailpagina
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
     * Verantwoordelijk voor het maken van een edit form.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'dit wordt straks de edit form';
    }

    /**
     * Update the specified resource in storage.
     * verantwoordelijk voor het updaten van een product
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * verantwoordelijk voor het verwijderen van een product
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
