<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MhsModel extends Model
{
    protected $table = 'mahasiswa';
    protected $field = ['nim','nama','alamat','telp','email','prodi','tgl_lahir','jenkel'];
}
