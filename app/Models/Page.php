<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function findBypage($slug)
    {
        return self::where('slug',$slug)->where('status',true)->firstOrfail();
    }
}
