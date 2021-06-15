<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = 'sanpham';

    protected $fillable = [
        'tensanpham',
        'slug',
        'gia',
        'gia_km',
        'mota',
        'hinhanh',
        'baohanh',
        'thongso',
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
        return url('/admin/sanphams/'.$this->getKey());
    }
}
