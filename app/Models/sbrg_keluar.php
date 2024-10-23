<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sbrg_keluar extends Model
{
    use HasFactory;
    protected $table = "sbrg_keluar";

    protected $fillable = [
        'idx',
        'tgl',
        'jumlah',
        'penerima',
        'keterangan',
    ];
}