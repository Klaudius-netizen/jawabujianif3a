<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
     use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'Buku';

    // Define which attributes are mass assignable
    protected $fillable = [
        'IDBuku',
        'Nama_Buku',
        'Jumlah_Buku',
        'Penerbit',
        'Pengarang',
    ];
}
