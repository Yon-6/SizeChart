<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    /**
     * ブランド一覧を取得
     *
     * @array ブランド名の一覧
     */
    function getBrand()
    {
        return Brand::all();
    }
}
