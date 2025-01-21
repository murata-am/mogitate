<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }

    // 商品詳細を表示するメソッド
    public function show($productId)
    {
        // $productId に基づいてデータベースから商品情報を取得
        return view('products.show', compact('productId'));
    }

    // 商品登録フォームを表示するメソッド
    public function showRegisterForm()
    {
        return view('products.register');
    }

    public function create()
    {
        return view('products.register');
    }

    public function store(RegisterRequest $request)
    {
        $product = $request->only(['name', 'price', 'image', 'season', 'description']);
        Product::create($product);
        return redirect()->route('products.index');
    }

    // 商品情報を更新するメソッド
    public function update(RegisterRequest $request, $productId)
    {
        // $productId に基づいて商品情報を更新
        // $request からフォームの値を取得
    }

    // 商品を削除するメソッド
    public function destroy($productId)
    {
        // $productId に基づいて商品を削除
    }
}
