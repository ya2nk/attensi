<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_absensi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan');
            $table->integer('id_jam_kerja');
            $table->date('tanggal');
            $table->integer('jam_masuk')->nullable();
            $table->integer('jam_pulang')->nullable();
            $table->integer('telat');
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
        Schema::dropIfExists('data_absensi');
    }
}
