<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function getProducts()
    {
        $products = Product::all();
        return response()->json( $products, 200);

    }

    public function getProduct($id)
    {
        $product = Product::find($id);
        if (!$product)
            return response()->json(['message' => 'Producto no encontrado'], 404);
        return response()->json(['product' => $product],200);
    }

    public function createProduct(ProductRequest $request, Product $product)
    {
        return response()->json(['product' => $product->create($request->validated())], 200);
    }

    public function updateProduct(ProductRequest $request, Product $product, $id)
    {
        $product = Product::find($id);
        if (!$product)
            return response()->json(['message' => 'Producto no encontrado'], 404);
        return response()->json(['product' => $product->update($request->validated())], 200);
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (!$product)
            return response()->json(['message' => 'Producto no encontrado'], 404);
        return response()->json(['product' => $product->delete(), 'message' => 'Producto eliminado correctamente'],200);
    }
}
