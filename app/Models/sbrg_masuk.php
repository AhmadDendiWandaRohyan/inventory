<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sbrg_masuk extends Model
{
    use HasFactory;
    protected $table = "sbrg_masuk";

    protected $fillable = [
        'idx',
        'tgl',
        'jumlah',
        'keterangan',
    ];
}