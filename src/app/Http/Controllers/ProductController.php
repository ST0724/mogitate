<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::simplePaginate(6);
        
        return view('products', compact('products'));
    }

    public function regist(){
        return view('register');
    }

    public function store(Request $request){
        $product = $request->only(['name', 'price', 'image', 'description']); //季節(中間テーブル登録)は省略中
        Product::create($product);
        return redirect('/products');
    }

    public function detail($id){
        $products = Product::find($id);
        return view('detail', compact('id', 'products'));
    }

    public function update(Request $request){
        $product = $request->only(['name', 'price', 'image', 'description']);
        Product::find($request->id)->update($product);
        return redirect('/products');
    }
}
