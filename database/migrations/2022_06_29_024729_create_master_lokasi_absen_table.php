<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterLokasiAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_lokasi_absen', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lokasi",100);
            $table->string("alamat",255);
            $table->double("latitude");
            $table->double("longitude");
            $table->float("radius");
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
        Schema::dropIfExists('master_lokasi_absen');
    }
}
