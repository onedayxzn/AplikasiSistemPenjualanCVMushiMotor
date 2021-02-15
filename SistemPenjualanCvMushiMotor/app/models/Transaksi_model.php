<?php

class Transaksi_model
{
    private $table = 'transaksi';
    private $table2 = 'laporan';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }
    public function tambahLaporan($data)
    {
        $query = "INSERT INTO laporan VALUES
                  ('', :Kas, :Piutang, :Persediaan_kendaraan, :Service, :Gedung, :Peralatan, :Utang, :Gaji_karyawan, :Modal, :Tgl_laporan)";

        $this->db->query($query);
        $this->db->bind('Kas', $data['kas']);
        $this->db->bind('Piutang', $data['piutang']);
        $this->db->bind('Persediaan_kendaraan', $data['kendaran']);
        $this->db->bind('Service', $data['service']);
        $this->db->bind('Gedung', $data['gedung']);
        $this->db->bind('Peralatan', $data['peralatan']);
        $this->db->bind('Utang', $data['utang']);
        $this->db->bind('Gaji_karyawan', $data['gj']);
        $this->db->bind('Modal', $data['modal']);
        $this->db->bind('Tgl_laporan', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }



    public function getAllLaporan()
    {
        $query = "SELECT * FROM `" . $this->table2 . "`";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahtransaksi($data)
    {
        $query = "INSERT INTO transaksi VALUES
                  ('', :Id_kendaraan,:Nama_konsumen,:Alamat_konsumen,:Tgl_transaksi)";

        $this->db->query($query);
        $this->db->bind('Id_kendaraan', $data['pilihkendaraan']);
        $this->db->bind('Nama_konsumen', $data['nama']);
        $this->db->bind('Alamat_konsumen', $data['alamat']);
        $this->db->bind('Tgl_transaksi', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function daftarTransaksi()
    {
        $query = "SELECT * FROM `" . $this->table . "`";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function hapusDataKonsumen($Id_transaksi)
    {
        $query = "DELETE FROM transaksi WHERE Id_transaksi = :Id_transaksi";
        $this->db->query($query);
        $this->db->bind('Id_transaksi', $Id_transaksi);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function carikonsumen()
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM Transaksi WHERE Nama_konsumen LIKE :cari OR Alamat_konsumen LIKE :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        return $this->db->resultSet();
    }

    public function Pengeluaran()
    {
        $query = "SELECT sum(Harga_awal) as pengeluaran from kendaraan ";
        $this->db->query($query);
        $this->db->bind('pengeluaran', "pengeluaran");
        return $this->db->resultSet();
    }

    public function Pemasukan()
    {
        $query = "SELECT sum(Harga) as pemasukan from kendaraan INNER JOIN transaksi ON kendaraan.Id_kendaraan=transaksi.Id_kendaraan";
        $this->db->query($query);
        $this->db->bind('pemasukan', "pemasukan");
        return $this->db->resultSet();
    }

    public function Gaji()
    {
        $query = "SELECT sum(Gaji) as gaji from user";
        $this->db->query($query);
        $this->db->bind('gaji', "gaji");
        return $this->db->resultSet();
    }

    public function hapusDataLaporan($id_laporan)
    {
        $query = "DELETE FROM laporan WHERE id_laporan = :id_laporan";
        $this->db->query($query);
        $this->db->bind('id_laporan', $id_laporan);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getTransaksi()
    {
        $query = "SELECT * FROM transaksi INNER JOIN kendaraan ON transaksi.Id_kendaraan=kendaraan.Id_kendaraan";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getTransaksibyid($Id_transaksi)
    {
        $query = "SELECT * FROM transaksi INNER JOIN kendaraan ON transaksi.Id_kendaraan=kendaraan.Id_kendaraan WHERE Id_transaksi=:Id_transaksi";
        $this->db->query($query);
        $this->db->bind('Id_transaksi', $Id_transaksi);
        return $this->db->single();
    }
    public function getLaporanbyid($Id_laporan)
    {
        $this->db->query("SELECT * FROM laporan WHERE Id_laporan=:Id_laporan");
        $this->db->bind('Id_laporan', $Id_laporan);
        return $this->db->single();
    }
    public function cari()
    {
        $cari = $_POST['cari'];
        $query = "SELECT * FROM transaksi INNER JOIN kendaraan ON transaksi.Id_kendaraan=kendaraan.Id_kendaraan WHERE Tgl_transaksi LIKE :cari OR Merk Like :cari OR Nama_konsumen Like :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        return $this->db->resultSet();
    }

    public function AKTIVA()
    {

        $query = "SELECT sum(Kas+Piutang+Persediaan_kendaraan+Service) as aktivalancar from laporan ";
        $this->db->query($query);
        $this->db->bind('aktivalancar', "aktivalancar");
        return $this->db->resultSet();
    }
    public function AKTIVATETAP()
    {

        $query = "SELECT sum(Kas+Piutang+Persediaan_kendaraan+Service) as aktivatetap from laporan ";
        $this->db->query($query);
        $this->db->bind('aktivatetap', "aktivatetap");
        return $this->db->resultSet();
    }

    public function AKTIVALANCAR()
    {

        $query = "SELECT sum(Gedung+peralatan) as aktivalancar from laporan ";
        $this->db->query($query);
        $this->db->bind('aktivalancar', "aktivalancar");
        return $this->db->resultSet();
    }
    public function KEWAJIBAN()
    {

        $query = "SELECT sum(Utang+Gaji_karyawan) as kewajiban from laporan ";
        $this->db->query($query);
        $this->db->bind('kewajiban', "kewajiban");
        return $this->db->resultSet();
    }

    public function carila()
    {
        $carila = $_POST['carila'];
        $query = "SELECT * FROM laporan WHERE Tgl_laporan LIKE :carila";
        $this->db->query($query);
        $this->db->bind('carila', "%$carila%");
        return $this->db->resultSet();
    }
}
