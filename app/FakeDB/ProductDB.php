<?php

namespace App\FakeDB;

use App\Models\Product;

class ProductDB
{
  private static function seedProducts(): void
  {
    if (session()->has('products')) {
      return;
    }

    session(['products' => [
      new Product(1, 'Phone', 1000),
      new Product(2, 'Tablet', 1500),
      new Product(3, 'Laptop', 2000),
    ]]);
  }

  public static function all(): array
  {
    self::seedProducts();

    return session('products', []);
  }

  public static function find(int $id): ?Product
  {
    self::seedProducts();
    foreach (session('products', []) as $product) {
      if ($product->id == $id) {
        return $product;
      }
    }

    return null;
  }

  public static function add(string $new_name, float $new_price): void
  {
    self::seedProducts();
    $products = session('products', []);
    $id = count($products) + 1;
    $new_product = new Product($id, $new_name, $new_price);
    $products[] = $new_product;
    session(['products' => $products]);
  }
}
