<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use HasFactory;
    protected $table = "products";

    private $productId;
    private $productName;
    private $quantity;
    private $address;

    protected $fillable = [
        "productId", "productName", "quantity", "address"
    ];

    protected $hidden = [];

    public function validate(): array {
        return [
            'productId' => 'required',
            'productName' => ['required','max:255', 'min:10'],
            'quantity'=> 'required',
            'address'=> 'required',
        ];
    }
}
