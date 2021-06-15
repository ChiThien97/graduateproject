<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    protected $table = 'loaisanpham';

    protected $fillable = [
        'tenloai',
        'slug',
        'mota',
        'ngaytao',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'ngaytao',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/loaisanphams/'.$this->getKey());
    }
}
