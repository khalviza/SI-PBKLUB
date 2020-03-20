<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $fillable = ['nama','email','email','nomorhp','pendidikan',
    'instansi','profil','password','username'];

    public function penggunaLog()
    {
        return $this->hasMany(logbookAnalis::class,'nama');
    }
}
