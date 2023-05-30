<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joblink extends Model
{
    use HasFactory;

    protected $table = 'job_link';

    protected $fillable = [
        'judul',
        'kategori_kerja',
        'nama_perusahaan',
        'lokasi',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
