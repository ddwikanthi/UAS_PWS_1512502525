<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    protected $table = 'mahasiswa';
    protected $field = ['nim','nama','alamat','telp','email','prodi','tgl_lahir','jenkel'];
}
