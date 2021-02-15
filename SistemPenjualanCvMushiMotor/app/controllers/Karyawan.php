<?php

class Karyawan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Karyawan | CV Mushi Motor';
        $data['total_kendaraan'] = $this->model('Kendaraan_model')->total_kendaraan();
        $data['total_konsumen'] = $this->model('Konsumen_model')->totalKonsumen();
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templatesKaryawan/footer');
    }

    public function Profile()
    {
        $data['judul'] = 'Profile | CV Mushi Motor';
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/profile');
        $this->view('templatesKaryawan/footer');
    }

    public function daftarKendaraan()
    {
        $data['judul'] = 'kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getAllkendaraan();

        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/daftarKendaraan', $data);
        $this->view('templatesKaryawan/footer');
    }
    public function detailKendaraan($Id_kendaraan)
    {
        $data['judul'] = 'kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getkendaraanbyid($Id_kendaraan);
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/detailKendaraan', $data);
        $this->view('templatesKaryawan/footer');
    }

    public function transaksi()
    {
        $data['judul'] = 'Transaksi | CV Mushi Motor';
        $data['kendaraanmasuk'] = $this->model('Kendaraan_model')->getAllkendaraanMasuk();
        $data['transaksi'] = $this->model('Transaksi_model')->getTransaksi();
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/transaksi', $data);
        $this->view('templatesKaryawan/footer');
    }
    public function cari()
    {
        $data['judul'] = 'Transaksi | CV Mushi Motor';
        $data['cari'] = $this->model('Kendaraan_model')->getAllkendaraanMasuk();
        $data['transaksi'] = $this->model('Transaksi_model')->cari();
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/transaksi', $data);
        $this->view('templatesKaryawan/footer');
    }
    public function konsumen()
    {
        $data['judul'] = 'konsumen | CV Mushi Motor';
        $data['konsumen'] = $this->model('Transaksi_model')->daftarTransaksi();
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/konsumen', $data);
        $this->view('templatesKaryawan/footer');
    }

    public function carikonsumen()
    {
        $data['judul'] = 'konsumen | CV Mushi Motor';
        $data['konsumen'] = $this->model('Transaksi_model')->cariKonsumen();
        $this->view('templatesKaryawan/header', $data);
        $this->view('karyawan/konsumen', $data);
        $this->view('templatesKaryawan/footer');
    }


    public function CetakTransaksi($Id_transaksi)
    {
        $data['judul'] = 'Kwitansi | CV Mushi Motor';
        $data['cetaktransaksi'] = $this->model('Transaksi_model')->getTransaksibyid($Id_transaksi);
        $this->view('templatesCetak/header', $data);
        $this->view('Cetak/cetaktransaksi', $data);
        $this->view('templatesCetak/footer');
    }
    public function tambahTransaksi()
    {
        if ($this->model('Transaksi_model')->tambahtransaksi($_POST) > 0) {
            Flasher::setTransaksi('Berhasil', 'diinput', 'success');

            header('location: ' . BASEURL . '/karyawan/transaksi');

            exit;
        } else {
            Flasher::setTransaksi('Gagal', 'diinput', 'danger');
            header('location: ' . BASEURL . '/karyawan/transaksi');
            exit;
        }
    }

    public function carikendaraan()
    {
        $data['judul'] = 'Daftar Karyawan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->carikendaraan();
        $this->view('templatesKaryawan/header', $data);
        $this->view('Karyawan/daftarKendaraan', $data);
        $this->view('templatesKaryawan/footer');
    }

    public function hapuskonsumen($Id_transaksi)
    {
        if ($this->model('Transaksi_model')->hapusDataKonsumen($Id_transaksi) > 0) {
            Flasher::setTransaksi('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/karyawan/transaksi');
            exit;
        } else {
            Flasher::setTransaksi('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/karyawan/transaksi');
            exit;
        }
    }
    public function Ubah()
    {
        if ($this->model('User_model')->editDataPersonal($_POST) > 0) {

            Flasher::setFlash('Berhasil', 'diedit', 'success');
            header('location: ' . BASEURL . '/Karyawan/profle');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diedit', 'danger');
            header('location: ' . BASEURL . '/Karyawan/profile');
            exit;
        }
    }
}
