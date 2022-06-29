<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string("nik")->unique();
            $table->string("nama_karyawan");
            $table->integer("id_departemen");
            $table->integer("id_jabatan");
            $table->date("tanggal_lahir");
            $table->string("alamat");
            $table->integer("aktif")->default(1);
            $table->integer("id_jam_kerja");
            $table->integer("id_lokasi");
            $table->integer("id_parent")->default(0);
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
        Schema::dropIfExists('master_karyawan');
    }
}
