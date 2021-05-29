<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'Kode_buku';
    // protected $keyType = 'string';

    protected $fillable = [
        'Kode_buku',
        'Kode_kategori',
        'Kode_penerbit',
        'Judul',
        'jumlah',
        'Pengarang',
        'Tahun_terbit'
    ];
}
