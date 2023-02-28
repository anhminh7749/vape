<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  
    public function index()
    {
        $pro = products::all();
        return view('components.products');
    }

   
    public function create(Request $request)
    {
        $request = $request->all();
    }

  
    public function store()
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit()
    {
        //
    }


    public function update()
    {
        //
    }

   
    public function destroy()
    {
        //
    }
}
