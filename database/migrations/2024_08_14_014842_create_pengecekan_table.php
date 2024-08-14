<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengecekan', function (Blueprint $table) {
            $table->id();
            $table->time('awal_muat');
            // Uncomment if needed: $table->date('tanggal');
            // Uncomment if needed: $table->string('customer');
            $table->string('kota_negara');
            // Uncomment if needed: $table->string('ekspedisi');
            $table->string('lantai');
            $table->string('dinding');
            $table->string('pengunci_kontainer');
            $table->string('sapu');
            $table->string('vacum');
            $table->string('disemprot');
            $table->string('choke');
            $table->string('stopper');
            $table->string('sling');
            $table->string('silica_gel');
            $table->string('fumigasi');
            $table->string('selesai_muat');
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
     */
    public function down(): void
    {
        Schema::dropIfExists('pengecekan');
    }
};
