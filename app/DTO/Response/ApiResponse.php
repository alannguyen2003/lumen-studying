<?php

namespace App\DTO\Response;

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

    public function returnData() {
      return [
        "statusCode" => $this->statusCode,
        "message" => $this->message,
        'data' => $this->data
      ];
    }
}
