<?php

class Kendaraan_model
{
    private $table = 'kendaraan';
    private $table1 = 'kendaraan_masuk';
    private $table2 = 'kendaraan_keluar';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllkendaraan()
    {
        $query = "SELECT * FROM `" . $this->table . "`";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getkendaraanbyid($Id_kendaraan)
    {
        $this->db->query("SELECT * FROM `" . $this->table . "` WHERE Id_kendaraan=:Id_kendaraan");
        $this->db->bind('Id_kendaraan', $Id_kendaraan);
        return $this->db->single();
    }

    public function tambahDataKendaraan($data)
    {

        $query = "INSERT INTO kendaraan VALUES
                  ('',:Merk, :Jenis, :Harga_awal, :Tahun, :No_polisi, :No_Mesin, :No_rangka, :No_bpkb, :Warna, :Harga)";

        $this->db->query($query);
        $this->db->bind('Merk', $data['merk']);
        $this->db->bind('Jenis', $data['jenis']);
        $this->db->bind('Harga_awal', $data['harga_awal']);
        $this->db->bind('Tahun', $data['tahun']);
        $this->db->bind('No_polisi', $data['no_polisi']);
        $this->db->bind('No_Mesin', $data['no_mesin']);
        $this->db->bind('No_rangka', $data['no_rangka']);
        $this->db->bind('No_bpkb', $data['no_bpkb']);
        $this->db->bind('Warna', $data['warna']);
        $this->db->bind('Harga', $data['harga']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function editDataKendaraan($data)
    {

        $id_kendaraan = $data['id_kendaraan'];
        $merk = $data['merk'];
        $jenis = $data['jenis'];
        $harga_awal = $data['harga_awal'];
        $tahun = $data['tahun'];
        $no_polisi = $data['no_polisi'];
        $no_mesin = $data['no_mesin'];
        $no_rangka = $data['no_rangka'];
        $no_bpkb = $data['no_bpkb'];
        $warna = $data['warna'];
        $harga = $data['harga'];

        $query = "UPDATE kendaraan SET
                  Merk = '$merk', 
                  Jenis = '$jenis',
                  Harga_awal = $harga_awal, 
                  Tahun = '$tahun',
                  No_polisi = '$no_polisi',
                  No_Mesin = '$no_mesin', 
                  No_rangka = '$no_rangka', 
                  No_bpkb = '$no_bpkb', 
                  Warna = '$warna', 
                  Harga = $harga
                   WHERE Id_kendaraan = $id_kendaraan";

        $this->db->query($query);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataKendaraan($Id_kendaraan)
    {
        $query = "DELETE FROM kendaraan WHERE Id_kendaraan=:Id_kendaraan";
        $this->db->query($query);
        $this->db->bind('Id_kendaraan', $Id_kendaraan);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function TambahKendaraanMasuk($data)
    {
        $query = "INSERT INTO kendaraan_masuk VALUES
        ('', :Id_kendaraan, :Tgl_masuk)";

        $this->db->query($query);
        $this->db->bind('Id_kendaraan', $data['pilihkendaraan']);
        $this->db->bind('Tgl_masuk', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getAllkendaraanMasuk()
    {
        $query = "SELECT * FROM `" . $this->table1 . "`";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function hapusDataKendaraanMasuk($Id_kendaraanMasuk)
    {
        $query = "DELETE FROM kendaraan_masuk WHERE Id_kendaraanMasuk=:Id_kendaraanMasuk";
        $this->db->query($query);
        $this->db->bind('Id_kendaraanMasuk', $Id_kendaraanMasuk);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function TambahKendaraanKeluar($data)
    {
        $query = "INSERT INTO kendaraan_keluar VALUES
        ('', :Id_kendaraan, :Tgl_keluar)";

        $this->db->query($query);
        $this->db->bind('Id_kendaraan', $data['pilihkendaraan']);
        $this->db->bind('Tgl_keluar', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getAllkendaraanKeluar()
    {
        $query = "SELECT * FROM `" . $this->table2 . "`";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function hapusDataKendaraanKeluar($Id_kendaraanKeluar)
    {
        $query = "DELETE FROM kendaraan_keluar WHERE Id_kendaraanKeluar=:Id_kendaraanKeluar";
        $this->db->query($query);
        $this->db->bind('Id_kendaraanKeluar', $Id_kendaraanKeluar);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function carikendaraan()
    {
        $carikendaraan = $_POST['carikendaraan'];
        $query = "SELECT * FROM kendaraan WHERE Merk LIKE :carikendaraan OR Tahun LIKE :carikendaraan OR Jenis LIKE :carikendaraan ";
        $this->db->query($query);
        $this->db->bind('carikendaraan', "%$carikendaraan%");
        return $this->db->resultSet();
    }
    public function carikendaraanmasuk()
    {
        $carikendaraanmasuk = $_POST['carikendaraanmasuk'];
        $query = "SELECT * FROM kendaraan_masuk WHERE Id_kendaraan LIKE :carikendaraanmasuk OR  Tgl_masuk LIKE :carikendaraanmasuk";
        $this->db->query($query);
        $this->db->bind('carikendaraanmasuk', "%$carikendaraanmasuk%");
        return $this->db->resultSet();
    }
    public function carikendaraanKeluar()
    {
        $carikendaraankeluar = $_POST['carikendaraanKeluar'];
        $query = "SELECT * FROM kendaraan_keluar WHERE Id_kendaraan LIKE :carikendaraanKeluar OR  Tgl_keluar LIKE :carikendaraanKeluar";
        $this->db->query($query);
        $this->db->bind('carikendaraanKeluar', "%$carikendaraankeluar%");
        return $this->db->resultSet();
    }

    public function total_kendaraan()
    {
        $query = "SELECT COUNT('Id_kendaraan') as total_kendaraan from kendaraan";
        $this->db->query($query);
        $this->db->bind('total_kendaraan', "total_kendaraan");
        return $this->db->resultSet();
    }

    public function total_kendaraanMasuk()
    {
        $query = "SELECT COUNT('Id_kendaraanMasuk') as total_kendaraanMasuk from kendaraan_masuk";
        $this->db->query($query);
        $this->db->bind('total_kendaraanMasuk', "total_kendaraanMasuk");
        return $this->db->resultSet();
    }

    public function total_kendaraanKeluar()
    {
        $query = "SELECT COUNT('Id_kendaraanKeluar') as total_kendaraanKeluar from kendaraan_keluar ";
        $this->db->query($query);
        $this->db->bind('total_kendaraanKeluar', "total_kendaraanKeluar");
        return $this->db->resultSet();
    }
}
