<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{

    public function run()
    {
        Customer::create(["name" => "Hany", "phone" => "010123", "email" => "hany@gmail.com", "address" => "El-Dokki", "city_id" => 1 ,"national_id"=>123]);
        Customer::create(["name" => "Ali", "phone" => "012123", "email" => "Ali@gmail.com", "address" => "El-Maadi", "city_id" => 1,"national_id"=>123]);
        Customer::create(["name" => "Adel", "phone" => "011123", "email" => "Adel@gmail.com", "address" => "El-Mohandeseen", "city_id" => 1,"national_id"=>123]);
        Customer::create(["name" => "Sameh", "phone" => "015123", "email" => "Sameh@gmail.com", "address" => "El-Dokki", "city_id" => 1,"national_id"=>123]);
        Customer::create(["name" => "Nader", "phone" => "014123", "email" => "Nader@gmail.com", "address" => "Semoha", "city_id" => 1,"national_id"=>123]);
        Customer::create(["name" => "Ola", "phone" => "016123", "email" => "Ola@gmail.com", "address" => "Miami", "city_id" => 1,"national_id"=>123]);
        Customer::create(["name" => "Heba", "phone" => "018123", "email" => "Heba@gmail.com", "address" => "El-Dokki", "city_id" => 1,"national_id"=>123]);
        Customer::create(["name" => "Nadia", "phone" => "019123", "email" => "Nadia@gmail.com", "address" => "Semoha", "city_id" => 1,"national_id"=>123]);
    }
}
