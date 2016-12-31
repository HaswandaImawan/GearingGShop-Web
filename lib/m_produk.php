<?php

class Produk{

	private $db;

	public function Produk(){
		$this->db = new DBClass();
	}
	public function readAllBrand(){
		$query = "Select * from produk s join brand n on
			s.idbrand = n.NamaBrand";
		return $this->db->getRows($query);	
	}
	public function readAllKategori(){
		$query = "Select * from produk s join kategori n on
			s.IdKategori = n.NamaKategori";
		return $this->db->getRows($query);	
	}
	public function readAllProduk(){
		$query = "Select * from Produk";
		return $this->db->getRows($query);	
	}

	public function readProduk($IdProduk){
		$query = "Select * from Produk where IdProduk=".$IdProduk;
		return $this->db->getRows($query);		
	}

	public function createProduk($IdProduk, $IdBrand, $IdKategori, $NamaProduk, $Harga, $Deskripsi, $Foto){
		$query = "Insert into produk (IdProduk, IdBrand, IdKategori, NamaProduk, Harga, Deskripsi, Foto)
			values('$IdProduk','$IdBrand', '$IdKategori', '$NamaProduk', '$Harga', '$Deskripsi', '$Foto')";
		$this->db->putRows($query);	
	}

	public function updateProduk($IdBrand, $data){
		$IdProduk = $data['input_IdProduk'];
		$IdBrand = $data['input_IdBrand'];
		$IdKategori = $data['input_IdKategori'];
		$NamaProduk = $data['input_NamaProduk'];
		$Harga = $data['input_Harga'];
		$Deskripsi = $data['input_Deskripsi'];
		$Foto = $data['input_Foto'];

		$query = "update produk set IdProduk='$IdProduk', IdKategori='$IdKategori', NamaProduk='$NamaProduk', Harga='$Harga', Deskripsi='$Deskripsi', 'Foto=$Foto'";
		
		$query.= " where IdProduk=$IdProduk";
		$this->db->putRows($query);		
	}

	public function deleteProduk($IdProduk){
		$sql = "Delete from produk Where IdProduk=$IdProduk";
		$this->db->putRows($sql);		
	}


}