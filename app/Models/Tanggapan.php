<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapans';
    protected $guarded = ['id'];

    public function pengaduans()
    {
        return $this->belongsTo(Pengaduan::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'tgl_tanggapan' => 'datetime',
    ];
}
