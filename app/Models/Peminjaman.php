<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
     use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'DetailPinjam';

    // Define which attributes are mass assignable
    protected $fillable = [
        'NoPinjam',
        'IDAnggota',
        'IDBuku',
        'Tgl_Pinjam',
        'Tgl_Kembali',
    ];
}
