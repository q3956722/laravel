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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('coid')->comment("課程ID");
            $table->unsignedTinyInteger('level')->default(0)->comment("階層");
            $table->integer('order')->default(1)->comment("順序");
            $table->string("coname", 255)->comment("課程名稱");
            $table->integer('pid')->nullable()->comment("上層ID");
            $table->text("content")->nullable()->comment("文本內容");
            $table->text("cointro")->nullable()->comment("課程介紹");
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
        Schema::dropIfExists('courses');
    }
};
