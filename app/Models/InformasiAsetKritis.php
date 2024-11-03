<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiAsetKritis extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'nama_aset', 'deskripsi'];

    public function kategoriAsetKritis()
    {
        return $this->belongsTo(KategoriAsetKritis::class, 'id_kategori');
    }

    public function persyaratanKeamanan()
    {
        return $this->hasMany(PersyaratanKeamanan::class, 'id_aset');
    }
}
