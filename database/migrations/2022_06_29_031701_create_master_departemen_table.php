<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDepartemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_departemen', function (Blueprint $table) {
            $table->id();
            $table->string("nama_departemen");
            $table->integer("id_parent");
            $table->integer("id_jam_kerja");
            $table->integer("id_lokasi");
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
        Schema::dropIfExists('master_departemen');
    }
}
