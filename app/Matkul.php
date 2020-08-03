<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'TB_M_MATKUL';
    public function Siswa()
    {
        return $this->hasOne('App\Siswa');
    }
}
