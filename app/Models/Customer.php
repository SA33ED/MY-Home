<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Property;

class Customer extends Model
{
    use HasFactory;
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function properties(){
        return $this->hasMany(Property::class);
    }
}
