<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Kopi Hitam',
            'description' => 'Kopi hitam pekat dengan aroma khas',
            'type' => 'Minuman',
            'price' => 12000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Latte',
            'description' => 'Kopi susu lembut dengan foam di atasnya',
            'type' => 'Minuman',
            'price' => 18000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Es Teh Manis',
            'description' => 'Teh segar dengan gula cair',
            'type' => 'Minuman',
            'price' => 8000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Cappuccino',
            'description' => 'Perpaduan espresso, susu, dan busa susu',
            'type' => 'Minuman',
            'price' => 20000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Brownies Coklat',
            'description' => 'Brownies lembut dengan coklat pekat',
            'type' => 'Makanan',
            'price' => 15000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Roti Bakar Keju',
            'description' => 'Roti bakar dengan isian keju lumer',
            'type' => 'Makanan',
            'price' => 12000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Matcha Latte',
            'description' => 'Minuman matcha dengan susu segar',
            'type' => 'Minuman',
            'price' => 22000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Spaghetti Carbonara',
            'description' => 'Spaghetti dengan saus creamy dan bacon',
            'type' => 'Makanan',
            'price' => 30000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Pancake Coklat',
            'description' => 'Pancake lembut dengan topping coklat',
            'type' => 'Makanan',
            'price' => 18000,
            'stock' => rand(0, 50),
        ]);

        Product::create([
            'name' => 'Green Tea Frappe',
            'description' => 'Minuman dingin dengan rasa green tea khas',
            'type' => 'Minuman',
            'price' => 25000,
            'stock' => rand(0, 50),
        ]);
    }
}
