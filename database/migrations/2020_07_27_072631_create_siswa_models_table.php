<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_M_SISWA', function (Blueprint $table) {
            $table->increments('Siswa_ID');
            $table->string('Siswa_nama');
            $table->int('Siswa_umur');
            $table->text('Siswa_alamat');
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
        Schema::dropIfExists('TB_M_SISWA');
    }
}
