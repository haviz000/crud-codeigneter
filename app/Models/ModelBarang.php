<?php

namespace App\Models;

use CodeIgniter\Model;


/**
 * 
 */
class ModelBarang extends Model
{
	
	public function getData()
	{
		return $this->db->table('barangs')->get()->getResultArray();
	}

	public function addData($data)
	{
		return $this->db->table('barangs')->insert($data);
	}

	public function editData($data,$id_barang)
	{
		return $this->db->table('barangs')->update($data,array('id_barang' => $id_barang));
	}
	public function destroyData($id_barang)
	{
		return $this->db->table('barangs')->delete(array('id_barang' => $id_barang));
	}
}