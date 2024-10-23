<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class notes extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'notes';

    protected $fillable = [
        'contents',
        'admin',
        'status',
    ];
}