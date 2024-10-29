<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiResponse
{
    private $statusCode;
    private $message;
    private $data;

    public function __construct($statusCode, $message, $data) {
      $this->statusCode = $statusCode;
      $this->message = $message;
      $this->data = $data;
    }
}
