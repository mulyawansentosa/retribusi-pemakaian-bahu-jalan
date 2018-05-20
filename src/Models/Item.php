<?php

namespace Bantenprov\RetribusiPelayananKesehatan\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model 
{

    protected $table = 'items';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('uuid', 'keterangan', 'tarif', 'jumlah', 'subtotal', 'transaksi_id', 'tarif_id', 'rekening_id');

    public function getTransaksi()
    {
        return $this->hasOne('Transaksi', 'transaksi_id');
    }

    public function getRekening()
    {
        return $this->belongsTo('Rekening', 'rekening_id');
    }

    public function getTarif()
    {
        return $this->hasOne('Tarif', 'tarif_id');
    }

}