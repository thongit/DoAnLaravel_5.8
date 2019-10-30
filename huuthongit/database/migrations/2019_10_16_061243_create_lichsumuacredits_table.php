<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichsumuacreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichsumuacredit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("nguoi_choi_id")->unsigned();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoichoi')->onDelete('cascade');
            $table->integer("goi_credit_id")->unsigned();
            $table->foreign('goi_credit_id')->references('id')->on('goicredit')->onDelete('cascade');
            $table->integer("credit");
            $table->integer("so_tien");
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
        Schema::dropIfExists('lichsumuacredits');
    }
}
