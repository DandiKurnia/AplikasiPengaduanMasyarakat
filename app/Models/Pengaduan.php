<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $guarded = ['id'];

    protected $casts = [
        'tgl_pengaduan' => 'datetime',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class);
    }
}
