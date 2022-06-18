<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_chart_details', function (Blueprint $table) {
            // bigIncrementsメソッドは、自動増分するUNSIGNED BIGINT(主キー)カラムを作成します。
            $table->bigIncrements('size_chart_details_id');    // サイズ表詳細ID
            $table->integer('size_chart_id');                  // サイズ表ID
            $table->integer('brand_id');                       // ブランドID
            $table->integer('category_id');                    // カテゴリーID
            $table->text('gender_kids');                       // 性別、キッズ
            $table->text('tag_display_size');                  // タグ表示サイズ
            $table->text('japan_size');                        // 日本サイズ
            $table->text('age');                               // 年齢
            $table->text('height');                            // 身長
            $table->text('weight');                            // 体重
            $table->text('head');                              // ヘッド
            $table->text('bust');                              // バスト
            $table->text('waist');                             // ウエスト
            $table->text('hip');                               // ヒップ
            $table->text('shoulder_length');                   // 肩幅
            $table->text('body_width');                        // 身幅
            $table->text('shoulder_and_arm_length');           // 裄丈(ゆきたけ)
            $table->text('sleeve_length');                     // 袖丈(そでたけ)
            $table->text('total_length');                      // 身丈(みたけ)
            $table->text('body_length');                       // 着丈(きたけ)
            $table->smallInteger('del_flg')->default(0); // 削除フラグ
            // timestampsメソッドは、オプションの精度(合計桁数)でcreated_atおよびupdated_at TIMESTAMPカラムを作成します。
            $table->timestamps();                                      // 作成日＆更新日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_chart_details');
    }
};
