<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SizeChartDetail;
use App\Models\Brand;

class HomeController extends Controller
{
    /**
     * TOPページ(検索ページ)
     */
    function index()
    {
        // ブランド一覧を取得
        $bd = new Brand();
        $brands = $bd->getBrand();

        // 空のサイズ表を取得
        $scd = new SizeChartDetail();
        $size_charts = $scd->getSizeChart();

        return view('welcome', ['brands' => $brands], ['size_charts' => $size_charts]);
    }

    /**
     * 検索機能
     */
    function search(Request $request)
    {
        // ブランド一覧を取得
        $bd = new Brand();
        $brands = $bd->getBrand();

        // ブランド検索からサイズ表を取得
        $brand_search = $request->input('brand_search');
        $scd = new SizeChartDetail();
        $size_charts = $scd->getSizeChart($brand_search);

        return view('welcome', ['brands' => $brands], ['size_charts' => $size_charts]);
    }
}
