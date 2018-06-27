<?php

namespace App\Http\Controllers;
use App\MhsModel;
use Illuminate\Http\Request;
class MhsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
	
	public function index(){
    $data = MhsModel::all();
    return response($data);
	}
	
	public function show($nim){
    $data = MhsModel::where('nim',$nim)->get();
    return response ($data);
	}
	
	public function store (Request $request){
    $data = new MhsModel();
    $data->nim = $request->input('nim');
    $data->nama = $request->input('nama');
	$data->alamat = $request->input('alamat');
	$data->telp = $request->input('telp');
	$data->email = $request->input('email');
	$data->prodi = $request->input('prodi');
	$data->tgl_lahir = $request->input('tgl_lahir');
	$data->jenkel = $request->input('jenkel');
    $data->save();
    return response('Berhasil Tambah Data');
	}
	
	public function update(Request $request, $id){
	$data = MhsModel::where('id',$id)->first();
	$data->nim = $request->input('nim');
    $data->nama = $request->input('nama');
	$data->alamat = $request->input('alamat');
	$data->telp = $request->input('telp');
	$data->email = $request->input('email');
	$data->prodi = $request->input('prodi');
	$data->tgl_lahir = $request->input('tgl_lahir');
	$data->jenkel = $request->input('jenkel');
    $data->save();
	
    return response('Berhasil Merubah Data');
	}

	public function destroy($id){
    $data = MhsModel::where('id',$id)->first();
    $data->delete();
    return response('Berhasil Menghapus Data');
	}
}