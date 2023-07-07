<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BimbinganKonseling extends Model
{
    protected $table = 'bimbingan_konseling';

    protected $fillable = [
        'nama',
        'email',
        'kelas',
        'tanggal',
        // Add other fillable fields as needed
    ];
}
