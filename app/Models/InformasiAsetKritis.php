<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiAsetKritis extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'name', 'deskripsi'];

    public function kategoriAsetKritis()
    {
        return $this->belongsTo(KategoriAsetKritis::class, 'id_kategori');
    }

    public function persyaratanKeamanan()
    {
        return $this->hasOne(PersyaratanKeamanan::class, 'id_aset');
    }
}
