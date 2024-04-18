<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee_shop extends Model
{
    use HasFactory;
    protected $table = 'coffee_shops';
    protected $primaryKey = 'id';
    protected $fillable = ['shop_name', 'city', 'state'];

}