<?php

namespace App\Controllers;

use CodeIgniters\Controller;
use App\Models\ModelBarang;


/**
 * 
 */
class Barang extends BaseController
{
	public function __construct()
	{
		$this->ModelBarang = new ModelBarang();
		helper('form');
	}

	public function index()
	{
		$data = [
			'barang' => $this->ModelBarang->getData(),
		];
		return view('v_barang',$data);
	}
	public function tambah()
	{
		$data=[
			'nama_barang' => $this->request->getPost('nama_barang'),
			'harga_barang' => $this->request->getPost('harga_barang'),
			'stok' => $this->request->getPost('stok'),
		];

		$this->ModelBarang->addData($data);
		session()->setFlashdata('success','data berhasil ditambahkan !');
		return redirect()->to(base_url('barang'));
	}
	public function edit($id_barang)
	{
		$data=[
			'nama_barang' => $this->request->getPost('nama_barang'),
			'harga_barang' => $this->request->getPost('harga_barang'),
			'stok' => $this->request->getPost('stok'),
		];
		$this->ModelBarang->editData($data,$id_barang);
		session()->setFlashdata('success','data berhasil di edit !');
		return redirect()->to(base_url('barang'));
	}
	public function delete($id_barang)
	{
		$this->ModelBarang->destroyData($id_barang);
		session()->setFlashdata('success','data berhasil di hapus !');
		return redirect()->to(base_url('barang'));
	}
}



