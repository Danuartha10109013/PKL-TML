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
        Schema::create('shipment', function (Blueprint $table) {
            $table->id();
            $table->string('no_gs');
            $table->date('tgl_gs');
            $table->string('no_so');
            $table->string('no_po');
            $table->string('no_do');
            $table->string('no_container');
            $table->string('no_seal');
            $table->string('no_mobil');
            $table->string('forwarding');
            $table->string('Kepada');
            $table->string('alamat_pengirim');
            $table->string('alamat_tujuan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment');
    }
};
