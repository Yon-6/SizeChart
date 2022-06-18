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
        Schema::create('size_charts', function (Blueprint $table) {
            $table->bigIncrements('size_charts_id');           // サイズ表ID
            $table->smallInteger('del_flg')->default(0); // 削除フラグ
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
        Schema::dropIfExists('size_charts');
    }
};
