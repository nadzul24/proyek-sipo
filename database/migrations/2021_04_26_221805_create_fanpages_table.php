<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFanpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fanpages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_theme')->references('id')->on('themes');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('no_telp');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('hobi');
            $table->string('pekerjaan');
            $table->string('prestasi');
            $table->string('kewarganegaraan');
            $table->string('foto_profile');
            $table->string('moto');
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
        Schema::dropIfExists('fanpages');
    }
}
