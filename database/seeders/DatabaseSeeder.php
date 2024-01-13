<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produk;
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
            "name"=> "Akhdan Najib",
            "email"=>"akhdan@gmail.com",
            "password"=>"Kokon123"]);
        

       Produk::create([
        "name"=> "Sun and Flower",
        "category_id"=> "1",
        "Stock"=>"10",
        "Price"=> "120000",
        "Image"=> "sunback.png",
        "Description"=>"The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
       ]);
       
       Produk::create([
        "name"=> "Contoh Accessoris",
        "category_id"=> "2",
        "Stock"=>"10",
        "Price"=> "70000",
        "Image"=> "sunback.png",
        "Description"=>"The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
       ]);
       Produk::create([
        "name"=> "Contoh Stationery",
        "category_id"=> "3",
        "Stock"=>"10",
        "Price"=> "100000",
        "Image"=> "sunback.png",
        "Description"=>"The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
       ]);
       Produk::create([
        "name"=> "Sun and Flower",
        "category_id"=> "1",
        "Stock"=>"10",
        "Price"=> "120000",
        "Image"=> "sunback.png",
        "Description"=>"The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
       ]);
       Produk::create([
        "name"=> "Sun and Flower",
        "category_id"=> "1",
        "Stock"=>"10",
        "Price"=> "120000",
        "Image"=> "sunback.png",
        "Description"=>"The Sun and Flower icon reflects the harmony and balance between the sun as the main source of energy and flowers as a symbol of beauty and life."
       ]);

       Category::create([
        "Name"=> "T-shirt"
       ]);
       Category::create([
        "Name"=> "Accessories"
       ]);
       Category::create([
        "Name"=> "Stationery"
       ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
