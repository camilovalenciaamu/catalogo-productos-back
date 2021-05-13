<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller{

    public function getBrands()
    {
        $brands = Brand::all();
        return response()->json( $brands, 200);
    }

    public function getBrand($id)
    {
        $brand = Brand::find($id);
        if (!$brand)
            return response()->json(['message' => 'marca no encontrada'], 404);
        return response()->json(['brand' => $brand],200);
    }

    public function createBrand(BrandRequest $request, Brand $brand)
    {
        return response()->json(['brand' => $brand->create($request->validated())], 200);
    }

    public function updateBrand(BrandRequest $request, Brand $brand, $id)
    {
        $brand = Brand::find($id);
        if (!$brand)
            return response()->json(['message' => 'marca no encontrada'], 404);
        return response()->json(['brand' => $brand->update($request->validated())], 200);
    }

    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        if (!$brand)
            return response()->json(['message' => 'marca no encontrada'], 404);
        return response()->json(['brand' => $brand->delete(), 'mensaje' => 'marca eliminada correctamente'],200);
    }

}
