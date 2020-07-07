<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
	protected $table ='tb_reservasi';
	Protected $fillable = ['id_tamu','id_ruangan','id_transaksi','check_in','check_out','ststus','kode_reservasi'];
}
