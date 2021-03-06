<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterJamKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jam_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jam',100);
            $table->string('kode_jam',100);
            $table->integer("jam_masuk")->nullable();
            $table->integer("jam_pulang")->nullable();
            $table->integer('crossday')->default(0);
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
        Schema::dropIfExists('master_jam_kerja');
    }
}
