<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
use App\Models\Customer;

class City extends Model
{
    use HasFactory;
    public function customers(){
        return $this->hasMany(Customer::class);
    }
    public function properties(){
        return $this->hasMany(Property::class);
    }
}
