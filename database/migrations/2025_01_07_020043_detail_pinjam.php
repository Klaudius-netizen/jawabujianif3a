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
        Schema::dropIfExists('DetailPinjam'); 
        Schema::create('DetailPinjam', function (Blueprint $table) {
            $table->id(); 
            $table->string('NoPinjam')->unique();
            $table->string('IDAnggota');
            $table->string('IDBuku');
            $table->date('Tgl_Pinjam');
            $table->date('Tgl_Kembali');
            $table->timestamps();

             $table->foreign('IDAnggota')
            ->references('IDAnggota')   // Column in Anggota table
            ->on('Anggota')              // Table name (case-sensitive)
            ->onDelete('cascade');       // Optional: delete related records if an Anggota is deleted

        // Foreign key for IDBuku referencing Buku table
        $table->foreign('IDBuku')
            ->references('IDBuku')      // Column in Buku table
            ->on('Buku')                 // Table name (case-sensitive)
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DetailPinjam');
    }
};
