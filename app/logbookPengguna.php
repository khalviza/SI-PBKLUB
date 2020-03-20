<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logbookPengguna extends Model
{
    protected $fillable =['id_bahan','nama','jumlah'];
    
    protected $table ="logbook_penggunas";

    public function logBahan()
    {
        return $this->belongsTo(bahan::class,'nama');
    }

    public function logJumlah()
    {
        return $this->belongsTo(bahan::class,'jumlah');
    }

    public function logPengguna()
    {
        return $this->belongsTo(pengguna::class,'nama_pengguna');
    }
    
}
