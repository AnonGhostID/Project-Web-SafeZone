<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    protected $fillable = [
        'nama',
        'email',
        'kelas',
        'tanggal',
        'report',
        // Add other fillable fields as needed
    ];
}
