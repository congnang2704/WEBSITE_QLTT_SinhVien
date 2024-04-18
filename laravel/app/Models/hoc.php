<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoc extends Model
{
    use HasFactory; 
    protected $table = 'hoc';
    public function loptc()
    {
        return $this->belongsTo('App\Models\loptc', 'MaLop', 'MaLop');
    }

    public function sinhvien()
    {
        return $this->belongsTo('App\Models\sinhvien', 'MaSV', 'MaSV');
    }
    protected $primaryKey = 'id';
    protected $fillable = ['DiemQT', 'DiemCK', 'KetQua', 'MaLop', 'MaSV'];
}
