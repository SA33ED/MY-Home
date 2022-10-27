<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(["name"=>"Villa"]);
        Type::create(["name"=>"Flat"]);
        Type::create(["name"=>"Garage"]);
        Type::create(["name"=>"a Land"]);
        Type::create(["name"=>"Mall"]);
    }
}
