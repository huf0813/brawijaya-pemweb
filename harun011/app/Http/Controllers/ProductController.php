<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        // select * from product011
        $data = Product::all();
        return view('product.index', compact('data'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        // insert into product011 values(?,?,?,?)
        $data = new Product;
        $data->nama = $request->namaProduct;
        $data->kode = $request->kodeProduct;
        $data->harga = $request->hargaProduct;
        $data->stock = $request->stockProduct;
        $data->save();
        return redirect('product');
    }
}
