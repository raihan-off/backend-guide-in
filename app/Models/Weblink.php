<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weblink extends Model
{
    use HasFactory;

    protected $table = 'web_link';

    protected $fillable = [
        'nama_website',
        'kategori',
        'link_website',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
