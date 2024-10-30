<?php

class ProductService {
  private $productRepository;
  public function __construct(ProductRepository $productRepository) { 
    $this->productRepository = $productRepository;
  }

  public function getAllProducts() {
    return $this->productRepository->getAll();
  }
}