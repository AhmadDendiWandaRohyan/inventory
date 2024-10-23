<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class stock_brg extends Model
{
    use HasFactory;

    protected $table = "sstock_brg";
    protected $primaryKey = 'idx';

    protected $fillable = ['*'];

    // public function user()
    // {

    //     return $this->hasMany(User::class);
    // }

    // protected $fillable = [
    //     'nama',
    //     'jenis',
    //     'merk',
    //     'seri',
    //     'stock',
    //     'satuan',
    //     'lokasi',
    // ];
}