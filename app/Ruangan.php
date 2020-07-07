<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
	protected $table ='tb_ruangan';
	protected $fillable = ['nama_ruangan','harga','ukuran','kapasitas','fasilitas','stok','kategori','image1','image2','image3'];
}
