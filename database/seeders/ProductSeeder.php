<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            
DB::table('products')->insert([
    'name'=>"Iphone 13",
    'description'=>"This is a smart phone",
    'amount'=>980
]);

DB::table('products')->insert([
    'name'=>"Ipad Pro 11",
    'description'=>"Tablet Apple",
    'amount'=>850
]);

DB::table('products')->insert([
    'name'=>"Play station 5",
    'description'=>"Video Console",
    'amount'=>540
]);







    }
}
