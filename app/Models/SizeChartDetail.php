<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeChartDetail extends Model
{
    use HasFactory;

    /**
     * size_chart_detailsテーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'size_chart_details_id';

    /**
     * サイズ表を取得
     *
     * @return array サイズ表
     */
    function getSizeChart($brand_id = '')
    {
        return SizeChartDetail::where('brand_id', $brand_id)->get();
    }
}
