<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;

    protected $stable = 'rumah';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nik_kk',
        'tgl_bantuan',
        'jenis_bantuan',
        'keterangan'
    ];
}
