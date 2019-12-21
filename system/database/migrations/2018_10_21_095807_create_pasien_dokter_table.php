<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_dokter', function (Blueprint $table) {
            $table->increments('id_pasdok');
            $table->unsignedInteger('id_dokter');
            $table->foreign('id_dokter')
                ->references('id_dokter')
                ->on('dokter')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedInteger('id_pasien');
            $table->foreign('id_pasien')
                ->references('id_pasien')
                ->on('pasien')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('pasien_dokter');
    }
}
