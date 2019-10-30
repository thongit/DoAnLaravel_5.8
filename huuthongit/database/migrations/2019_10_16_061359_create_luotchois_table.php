<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuotchoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luotchoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("nguoi_choi_id")->unsigned();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoichoi')->onDelete('cascade');
            $table->integer("so_cau");
            $table->string("diem");
            $table->string("ngay_gio");
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
        Schema::dropIfExists('luotchois');
    }
}
