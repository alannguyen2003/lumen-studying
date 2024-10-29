<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use Petstore30\ApiResponse;

class ProductController extends Controller
{
    public function index() {
        return response()->json();
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
