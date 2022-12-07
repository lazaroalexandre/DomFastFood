<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Food extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "name",
        "description",
        "expiration_date",
        "image",
        "price",
        "number_one",
        "number_two"
        
    ];
    protected $dates = [
        "expiration_date"
    ];
}
