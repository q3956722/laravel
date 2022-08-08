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
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('unid')->comment("單元ID");
            $table->unsignedTinyInteger('level')->default(0)->comment("階層");
            $table->integer('order')->default(1)->comment("順序");
            $table->string("unname", 255)->comment("單元名稱");
            $table->integer('pid')->nullable()->comment("上層ID");
            $table->string("video_id")->nullable()->comment("影片ID");
            $table->text("uncontent")->nullable()->comment("文本內容");
            $table->text("unintro")->nullable()->comment("單元介紹");
            $table->string("visible", 255)->default(1)->comment("可見性");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
};
