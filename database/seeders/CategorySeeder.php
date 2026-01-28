<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $categories=["Bionda", "Ipa", "Rossa", "Stout", "Gose"];

        foreach($categories as $category){
            DB::table("categories")->insert([
                "name"=>$category,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }
        
    }
}
