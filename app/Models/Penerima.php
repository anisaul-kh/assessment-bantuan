<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'alamat_lengkap',
        'no_hp',
        'jenis_kelamin',
        'kategori_bantuan',
        'tanggal_lahir',
        'status_ekonomi',
    ];

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }
}
