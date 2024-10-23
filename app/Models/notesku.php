<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notesku extends Model
{
    use HasFactory;

    protected $table = "notes";

    protected $fillable = [
        'contents',
        'admin',
        'status',
    ];
}