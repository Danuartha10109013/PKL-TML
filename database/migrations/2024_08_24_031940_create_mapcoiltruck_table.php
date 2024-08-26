<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mapcoiltruck', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id sebagai primary key
            $table->string('no_gs')->nullable(); // Kolom 'no_gs'
            $table->string('a1')->nullable();
            $table->string('a2')->nullable();
            $table->string('a3')->nullable();
            $table->string('a4')->nullable();
            $table->string('a5')->nullable();
            $table->string('a6')->nullable();
            $table->string('a7')->nullable();
            $table->string('a8')->nullable();
            $table->string('a9')->nullable();
            $table->string('a10')->nullable();
            $table->string('a11')->nullable();
            $table->string('a12')->nullable();
            $table->string('b1')->nullable();
            $table->string('b2')->nullable();
            $table->string('b3')->nullable();
            $table->string('b4')->nullable();
            $table->string('b5')->nullable();
            $table->string('b6')->nullable();
            $table->string('b7')->nullable();
            $table->string('b8')->nullable();
            $table->string('b9')->nullable();
            $table->string('b10')->nullable();
            $table->string('b11')->nullable();
            $table->string('b12')->nullable();

            $table->string('a1_eye')->nullable();
            $table->string('a2_eye')->nullable();
            $table->string('a3_eye')->nullable();
            $table->string('a4_eye')->nullable();
            $table->string('a5_eye')->nullable();
            $table->string('a6_eye')->nullable();
            $table->string('a7_eye')->nullable();
            $table->string('a8_eye')->nullable();
            $table->string('a9_eye')->nullable();
            $table->string('a10_eye')->nullable();
            $table->string('a11_eye')->nullable();
            $table->string('a12_eye')->nullable();
            $table->string('b1_eye')->nullable();
            $table->string('b2_eye')->nullable();
            $table->string('b3_eye')->nullable();
            $table->string('b4_eye')->nullable();
            $table->string('b5_eye')->nullable();
            $table->string('b6_eye')->nullable();
            $table->string('b7_eye')->nullable();
            $table->string('b8_eye')->nullable();
            $table->string('b9_eye')->nullable();
            $table->string('b10_eye')->nullable();
            $table->string('b11_eye')->nullable();
            $table->string('b12_eye')->nullable();
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mapcoiltruck');
    }
};