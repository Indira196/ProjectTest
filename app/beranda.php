<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    protected $table = 'mahasiswa';
    protected $guarded = ['id_mahasiswa'];
    public $primaryKey = 'id_mahasiswa';
}
