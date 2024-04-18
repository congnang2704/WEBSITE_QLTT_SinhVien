<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hocphan extends Model
{
    use HasFactory; 
    protected $table = 'hocphan';
    protected $primaryKey = 'MaHP';
    protected $fillable = ['TenHP', 'SoTC', 'HeSoCKy'];
    
    
}
