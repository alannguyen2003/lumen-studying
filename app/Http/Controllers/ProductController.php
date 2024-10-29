<?php

namespace App\Http\Controllers;

use App\Constant\ApiResponseConstant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\DTO\Response\ApiResponse;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $data = Product::all();

        $apiResponse = $data->count() == 0? new ApiResponse(ApiResponseConstant::HTTP_NOT_FOUND,
                                                            "No products found!",
                                                            null)
                                        : new ApiResponse(ApiResponseConstant::HTTP_OK,
                                                        "Get all products successful!", 
                                                        $data);

        return response()->json(
        $apiResponse->returnData()
        );
    }

    public function findById($id) {
        return response()->json(Product::find($id));
    }

    public function deleteById($id) {
        $product = Product::find($id);
        if ($product !== null) {
            $product->delete();
            return response()->json("Delete successfully id: ");
        }
        return response()->json(" does not exist in database!");
    }
}
