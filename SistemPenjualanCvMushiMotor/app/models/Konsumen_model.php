<?php

class Konsumen_model
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahKonsumen($data)
    {
        $query = "INSERT INTO konsumen VALUES
                  ('','', :Nama_konsumen,:Alamat_konsumen,:Tgl_transaksi)";

        $this->db->query($query);
        $this->db->bind('Nama_konsumen', $data['nama']);
        $this->db->bind('Alamat_konsumen', $data['alamat']);
        $this->db->bind('Tgl_transaksi', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function totalKonsumen()
    {
        $query = "SELECT count('Id_transaksi') as totalKonsumen from transaksi";
        $this->db->query($query);
        $this->db->bind('totalKonsumen', "totalKonsumen");
        return $this->db->resultSet();
    }
}
