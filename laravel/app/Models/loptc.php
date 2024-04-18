<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loptc extends Model
{
    use HasFactory;
    protected $table = 'loptc';
    public function hocphan()
    {
        return $this->belongsTo('App\Models\hocphan', 'MaHP', 'MaHP');
    }
    protected $primaryKey = 'MaLop';
    protected $fillable = ['HocKy', 'MaHP'];
    
}
