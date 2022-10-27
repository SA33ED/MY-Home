<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\City;

class Property extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}


