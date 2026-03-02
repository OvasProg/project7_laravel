<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Tag;

class ProductTagSeeder extends Seeder
{
    public function run(): void
    {
        $electronics = Tag::create(['name' => 'Electronics']);
        $portable = Tag::create(['name' => 'Portable']);
        $smart = Tag::create(['name' => 'Smart']);
        $home = Tag::create(['name' => 'Home']);
        $office = Tag::create(['name' => 'Office']);

        $p1 = Product::create(['name' => 'Smartphone', 'price' => 699]);
        $p2 = Product::create(['name' => 'Laptop', 'price' => 1200]);
        $p3 = Product::create(['name' => 'Tablet', 'price' => 450]);
        $p4 = Product::create(['name' => 'Headphones', 'price' => 199]);
        $p5 = Product::create(['name' => 'Smart Speaker', 'price' => 149]);

        $p1->tags()->attach([$electronics->id, $portable->id, $smart->id]);
        $p2->tags()->attach([$electronics->id, $smart->id, $office->id]);
        $p3->tags()->attach([$electronics->id, $portable->id]);
        $p4->tags()->attach([$electronics->id, $portable->id]);
        $p5->tags()->attach([$electronics->id, $smart->id, $home->id]);
    }
}
