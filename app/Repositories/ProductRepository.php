<?php 

use App\Models\Product;

class ProductRepository {
  public function __construct() {
  }

  public function getAll() {
    return Product::all();  
  }
}