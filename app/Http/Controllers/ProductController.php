<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class ProductController extends Controller
{
    public function index()
    {
    
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:100',
            'description'=>'nullable|min:3',
            'size'=>'required|decimal:0,2|max:100'
        ]);

        product::create($request->input());

        return redirect()->route('products.index');

    }

    public function show(string $id)
    {
        dd($id);
        
        return view('products.show');
    }
}
