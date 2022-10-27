<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProperitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            "type_id"=>rand(1,5),
            "address"=>"Eltgamoa Elawal - gate 4",
            "customer_id"=>rand(1,8),
            "city_id"=>rand(1,79),
            "area"=>rand(100,500),
            "price_per_month"=>rand(2000,9000),
            "num_of_rooms"=>rand(1,10),
            "num_of_bathrooms"=>rand(1,10),
            "num_of_kitchen"=>rand(1,10),
            "num_of_floors"=>rand(1,10),
            "floors"=>rand(1,10),

        ]);
        Property::create([
            "type_id"=>rand(1,5),
            "address"=>"El-rehab - gate 1",
            "customer_id"=>rand(1,8),
            "city_id"=>rand(1,79),
            "area"=>rand(100,500),
            "price_per_month"=>rand(2000,9000),
            "num_of_rooms"=>rand(1,10),
            "num_of_bathrooms"=>rand(1,10),
            "num_of_kitchen"=>rand(1,10),
            "num_of_floors"=>rand(1,10),
            "floors"=>rand(1,10),

        ]);

        Property::create([
            "type_id"=>rand(1,5),
            "address"=>"El-rehab - gate 2",
            "customer_id"=>rand(1,8),
            "city_id"=>rand(1,79),
            "area"=>rand(100,500),
            "price_per_month"=>rand(2000,9000),
            "num_of_rooms"=>rand(1,10),
            "num_of_bathrooms"=>rand(1,10),
            "num_of_kitchen"=>rand(1,10),
            "num_of_floors"=>rand(1,10),
            "floors"=>rand(1,10),

        ]);

        Property::create([
            "type_id"=>rand(1,5),
            "address"=>"El-rehab - gate 3",
            "customer_id"=>rand(1,8),
            "city_id"=>rand(1,79),
            "area"=>rand(100,500),
            "price_per_month"=>rand(2000,9000),
            "num_of_rooms"=>rand(1,10),
            "num_of_bathrooms"=>rand(1,10),
            "num_of_kitchen"=>rand(1,10),
            "num_of_floors"=>rand(1,10),
            "floors"=>rand(1,10),

        ]);

        Property::create([
            "type_id"=>rand(1,5),
            "address"=>"El-rehab - gate 4",
            "customer_id"=>rand(1,8),
            "city_id"=>rand(1,79),
            "area"=>rand(100,500),
            "price_per_month"=>rand(2000,9000),
            "num_of_rooms"=>rand(1,10),
            "num_of_bathrooms"=>rand(1,10),
            "num_of_kitchen"=>rand(1,10),
            "num_of_floors"=>rand(1,10),
            "floors"=>rand(1,10),

        ]);

        Property::create([
            "type_id"=>rand(1,5),
            "address"=>"El-rehab - gate 4",
            "customer_id"=>rand(1,8),
            "city_id"=>rand(1,79),
            "area"=>rand(100,500),
            "price_per_month"=>rand(2000,9000),
            "num_of_rooms"=>rand(1,10),
            "num_of_bathrooms"=>rand(1,10),
            "num_of_kitchen"=>rand(1,10),
            "num_of_floors"=>rand(1,10),
            "floors"=>rand(1,10),

        ]);
    }
}
