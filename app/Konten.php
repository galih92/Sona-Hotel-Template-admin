<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
	protected $table ='tb_konten';
	protected $fillable = ['judul','penulis','paragraf_1','paragraf_2','paragraf_3','paragraf_4'];
}
