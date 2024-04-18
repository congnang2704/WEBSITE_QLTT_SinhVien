<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    protected $table = 'coffees';
    protected $primaryKey = 'id';
    protected $fillable = ['coffee_name', 'price', 'shop_id','supplier_id'];
}