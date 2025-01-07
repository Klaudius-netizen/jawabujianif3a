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
        Schema::dropIfExists('Buku'); 
        Schema::create('Buku', function (Blueprint $table) {
            $table->id(); 
            $table->string('IDBuku')->unique();
            $table->string('Nama_Buku');
            $table->integer('Jumlah_Buku');
            $table->string('Penerbit');
            $table->string('Pengarang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Buku');
    }
};
