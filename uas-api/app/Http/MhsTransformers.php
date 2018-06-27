<?php
namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;
use App\MhsModel;

class MhsTransformers extends TransformerAbstract
{
  public function transform(Mahasiswa $field)
  {
    // ngubah format tampilan di postman
    return [
      'NIM' => $field->nim,
      'Nama' => $field->nama,
      'Alamat' => $field->alamat,
      'Telp' => $field->telp,
      'E-Mail' => $field->email,
      'Prodi' => $field->prodi,
      'TglLahir' => $field->tgl_lahir,
      'JenisKelamin' => $field->jenkel
    ];
  }
}