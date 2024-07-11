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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('no_obat');
            $table->string('nama_obat');
            $table->text('deskripsi_obat');
            $table->text('indikasi_umum');
            $table->text('komposisi');
            $table->string('dosis');
            $table->text('aturan_pakai');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('obat');
    }
};
