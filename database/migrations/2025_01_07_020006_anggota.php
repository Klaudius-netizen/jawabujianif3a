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
        Schema::dropIfExists('Anggota');
        Schema::create('Anggota', function (Blueprint $table) {
            $table->id(); 
            $table->string('IDAnggota')->unique();
            $table->string('Nama_Anggota');
            $table->string('Alamat');
            $table->string('Jurusan');
            $table->string('IDDaftar')->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Anggota');
    }
};
