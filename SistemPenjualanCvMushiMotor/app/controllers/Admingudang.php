<?php

class Admingudang extends controller
{
    public function index()
    {
        $data['judul'] = 'Admin Gudang | CV Mushi Motor';
        $data['total_kendaraan'] = $this->model('Kendaraan_model')->total_kendaraan();
        $data['total_kendaraanMasuk'] = $this->model('Kendaraan_model')->total_kendaraanMasuk();
        $data['total_kendaraanKeluar'] = $this->model('Kendaraan_model')->total_kendaraanKeluar();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/index', $data);
        $this->view('templatesGudang/footer');
    }

    public function profile()
    {
        $data['judul'] = 'profile | CV Mushi Motor';
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/profile', $data);
        $this->view('templatesGudang/footer');
    }

    public function about()
    {
        $data['judul'] = 'About | CV Mushi Motor';
        $this->view('templatesGudang/header', $data);
        $this->view('About/about');
        $this->view('templatesGudang/footer');
    }
    public function daftarkendaraan()
    {
        $data['judul'] = 'Daftar kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getAllkendaraan();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/daftarkendaraan', $data);
        $this->view('templatesGudang/footer');
    }
    public function detailkendaraan($Id_kendaraan)
    {
        $data['judul'] = 'Detail kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getkendaraanbyid($Id_kendaraan);
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/detailKendaraan', $data);
        $this->view('templatesGudang/footer');
    }
    public function editkendaraan($Id_kendaraan)
    {
        $data['judul'] = 'Edit kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getkendaraanbyid($Id_kendaraan);
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/editKendaraan', $data);
        $this->view('templatesGudang/footer');
    }
    public function kendaraanmasuk()
    {
        $data['judul'] = 'kendaraan masuk | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getAllkendaraan();
        $data['masuk'] = $this->model('Kendaraan_model')->getAllkendaraanMasuk();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/kendaraanmasuk', $data);
        $this->view('templatesGudang/footer');
    }
    public function detailMasuk($Id_kendaraan)
    {
        $data['judul'] = 'Detail kendaraan Masuk | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getkendaraanbyid($Id_kendaraan);
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/detailKendaraanMasuk', $data);
        $this->view('templatesGudang/footer');
    }
    public function kendaraankeluar()
    {
        $data['judul'] = 'kendaraan keluar | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Transaksi_model')->getTransaksi();
        $data['keluar'] = $this->model('Kendaraan_model')->getAllkendaraanKeluar();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/kendaraankeluar', $data);
        $this->view('templatesGudang/footer');
    }
    public function detailKeluar($Id_kendaraan)
    {
        $data['judul'] = 'Detail kendaraan Masuk | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getkendaraanbyid($Id_kendaraan);
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/detailKendaraanKeluar', $data);
        $this->view('templatesGudang/footer');
    }

    public function TambahKendaraan()
    {
        if ($this->model('Kendaraan_model')->tambahDataKendaraan($_POST) > 0) {
            Flasher::setKendaraan('Berhasil', 'ditambah', 'success');
            header('location: ' . BASEURL . '/Admingudang/daftarkendaraan');
            exit;
        } else {
            Flasher::setKendaraan('Gagal', 'ditambah', 'danger');
            header('location: ' . BASEURL . '/Admingudang/daftarKendaraan');
            exit;
        }
    }

    public function editDataKendaraan()
    {

        if ($this->model('Kendaraan_model')->editDataKendaraan($_POST) > 0) {
            Flasher::setKendaraan('Berhasil', 'diedit', 'success');
            header('location: ' . BASEURL . '/Admingudang/daftarkendaraan');
            exit;
        } else {
            Flasher::setKendaraan('Gagal', 'diedit', 'danger');
            header('location: ' . BASEURL . '/Admingudang/daftarKendaraan');
            exit;
        }
    }
    public function hapusKendaraan($Id_kendaraan)
    {
        if ($this->model('Kendaraan_model')->hapusDataKendaraan($Id_kendaraan) > 0) {
            Flasher::setKendaraan('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/Admingudang/daftarKendaraan');
            exit;
        } else {
            Flasher::setKendaraan('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/Admingudang/daftarKendaraan');
            exit;
        }
    }
    public function TambahKendaraanMasuk()
    {
        if ($this->model('Kendaraan_model')->tambahKendaraanMasuk($_POST) > 0) {
            Flasher::setKendaraanMasuk('Berhasil', 'ditambah', 'success');
            header('location: ' . BASEURL . '/Admingudang/Kendaraanmasuk');
            exit;
        } else {
            Flasher::setKendaraanMasuk('Gagal', 'ditambah', 'danger');
            header('location: ' . BASEURL . '/Admingudang/kendaraanmasuk');
            exit;
        }
    }
    public function hapusKendaraanMasuk($Id_kendaraan)
    {
        if ($this->model('Kendaraan_model')->hapusDataKendaraanMasuk($Id_kendaraan) > 0) {
            Flasher::setKendaraanMasuk('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/Admingudang/kendaraanmasuk');
            exit;
        } else {
            Flasher::setKendaraanMasuk('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/Admingudang/kendaraanmasuk');
            exit;
        }
    }
    public function TambahKendaraanKeluar()
    {
        if ($this->model('Kendaraan_model')->TambahKendaraanKeluar($_POST) > 0) {
            Flasher::setKendaraanKeluar('Berhasil', 'ditambah', 'success');
            header('location: ' . BASEURL . '/Admingudang/KendaraanKeluar');
            exit;
        } else {
            Flasher::setKendaraanKeluar('Gagal', 'ditambah', 'danger');
            header('location: ' . BASEURL . '/Admingudang/kendaraanKeluar');
            exit;
        }
    }
    public function hapusKendaraanKeluar($Id_kendaraan)
    {
        if ($this->model('Kendaraan_model')->hapusDataKendaraanKeluar($Id_kendaraan) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/Admingudang/kendaraanKeluar');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/Admingudang/kendaraanKeluar');
            exit;
        }
    }
    public function carikendaraan()
    {
        $data['judul'] = 'Daftar kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->carikendaraan();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/daftarKendaraan', $data);
        $this->view('templatesGudang/footer');
    }
    public function carikendaraanmasuk()
    {
        $data['judul'] = 'Daftar kendaraan masuk | CV Mushi Motor';
        $data['masuk'] = $this->model('Kendaraan_model')->carikendaraanmasuk();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/kendaraanmasuk', $data);
        $this->view('templatesGudang/footer');
    }
    public function carikendaraankeluar()
    {
        $data['judul'] = 'Daftar Kendaraan keluar | CV Mushi Motor';
        $data['keluar'] = $this->model('Kendaraan_model')->carikendaraankeluar();
        $this->view('templatesGudang/header', $data);
        $this->view('gudang/kendaraankeluar', $data);
        $this->view('templatesGudang/footer');
    }
    public function Ubah()
    {
        if ($this->model('User_model')->editDataPersonal($_POST) > 0) {

            Flasher::setFlash('Berhasil', 'diedit', 'success');
            header('location: ' . BASEURL . '/Admingudang/profle');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diedit', 'danger');
            header('location: ' . BASEURL . '/Admingudang/profile');
            exit;
        }
    }
}
