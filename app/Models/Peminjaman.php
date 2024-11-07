<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $with = ['barang'];

    protected $fillable = [
        'uuid',
        'kode_peminjaman',
        'kode_barang',
        'nomor_surat',
        'tanggal_peminjaman',
        'tanggal_kembali',
        'peminjam',
        'petugas'
    ];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}