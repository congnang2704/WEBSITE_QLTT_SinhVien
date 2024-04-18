<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    use HasFactory; 
    protected $table = 'sinhvien';
    protected $primaryKey = 'MaSV';
    protected $fillable = ['HoTen', 'GioiTinh', 'NgaySinh'];
    
    
}
