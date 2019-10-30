<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietluotchoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietluotchoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("luot_choi_id")->unsigned();
            $table->foreign('luot_choi_id')->references('id')->on('nguoichoi')->onDelete('cascade');
            $table->integer("cau_hoi_id")->unsigned();
            $table->foreign('cau_hoi_id')->references('id')->on('cauhoi')->onDelete('cascade');
            $table->string("phuong_an");
            $table->integer("diem");
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
        Schema::dropIfExists('chitietluotchois');
    }
}
