<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "Akhdan Najib",
            "email" => "akhdan@gmail.com",
            "password" => "Kokon123"
        ]);
        Product::create([
            "name" => "Sun and Flower",
            "category_id" => "1",
            "stock" => "10",
            "price" => "120000",
            "image" => "sunback.png",
            "description" => "The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
        ]);

        Product::create([
            "name" => "Contoh Accessoris",
            "category_id" => "2",
            "stock" => "10",
            "price" => "70000",
            "image" => "sunback.png",
            "description" => "The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
        ]);
        Product::create([
            "name" => "Contoh Stationery",
            "category_id" => "3",
            "stock" => "10",
            "price" => "100000",
            "image" => "sunback.png",
            "description" => "The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
        ]);
        Product::create([
            "name" => "Sun and Flower",
            "category_id" => "1",
            "stock" => "10",
            "price" => "120000",
            "image" => "sunback.png",
            "description" => "The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
        ]);
        Product::create([
            "name" => "Sun and Flower",
            "category_id" => "1",
            "stock" => "10",
            "price" => "120000",
            "image" => "sunback.png",
            "description" => "The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
        ]);

        Category::create([
            "name" => "T-shirt"
        ]);
        Category::create([
            "name" => "Accessories"
        ]);
        Category::create([
            "name" => "Stationery"
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
