<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
	protected $table = 'tb_profil';
	protected $fillable = ['nama_hotel','tentang','alamat','no_telp','email','fax'];
}
