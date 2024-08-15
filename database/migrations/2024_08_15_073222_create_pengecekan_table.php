<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengecekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengecekan', function (Blueprint $table) {
            $table->id();
            $table->time('awal_muat');
            $table->date('tgl_gs');
            $table->string('customer');
            $table->string('kota_negara');
            $table->string('lantai');
            $table->string('dinding');
            $table->string('pengunci_kontainer');
            $table->string('sapu');
            $table->string('vacum');
            $table->string('disemprot');
            $table->integer('choke');
            $table->integer('stopper');
            $table->integer('silica_gel');
            $table->string('fumigasi');
            $table->time('selesai_muat');
            $table->string('no_mobil');
            $table->string('no_container');
            $table->decimal('tonase_tare', 8, 2);
            $table->string('cuaca');
            $table->string('kondisi_ban');
            $table->string('kondisi_lantai');
            $table->string('rantai_webbing');
            $table->string('tonase');
            $table->string('terpal');
            $table->string('stuffing');
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
        Schema::dropIfExists('pengecekan');
    }
}
