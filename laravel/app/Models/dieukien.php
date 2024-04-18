<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dieukien extends Model
{
    use HasFactory;
    protected $table = 'dieukien';

    public function hocphan()
    {
        return $this->belongsTo('App\Models\hocphan', 'MaHP', 'MaHP');
    }

    protected $primaryKey = 'MaHPDK';
    protected $fillable = ['Loai', 'MaHP'];
    
}
