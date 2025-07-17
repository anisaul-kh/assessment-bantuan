<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'penerima_id',
        'skor_kesehatan',
        'skor_ekonomi',
        'skor_tempat_tinggal',
        'skor_pekerjaan',
        'skor_tanggungan',
        'total_skor',
        'status_layak',
        'keterangan',
        'tanggal_assessment',
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }
}
