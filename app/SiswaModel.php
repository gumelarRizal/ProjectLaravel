<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SiswaModel extends Model
{
    use softDeletes;
    protected $guarded = ['nama','umur','alamat'];
    protected $table = 'TB_M_SISWA';
    protected $dates = ['deleted_at'];
}
