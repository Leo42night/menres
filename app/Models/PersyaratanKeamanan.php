<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanKeamanan extends Model
{
    use HasFactory;

    protected $fillable = ['id_aset', 'jenis', 'kebutuhan'];

    public function informasiAsetKritis()
    {
        return $this->belongsTo(InformasiAsetKritis::class, 'id_aset');
    }
}
