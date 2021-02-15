<?php
class ManajerKeuangan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Keuangan | CV Mushi Motor';
        $data['Harga_awal'] = $this->model('Transaksi_model')->Pengeluaran();
        $data['Harga'] = $this->model('Transaksi_model')->Pemasukan();

        $data['Gaji'] = $this->model('Transaksi_model')->Gaji();

        $this->view('templatesKeuangan/header', $data);
        $this->view('keuangan/index', $data);
        $this->view('templatesKeuangan/footer');
    }
    public function profile()
    {
        $data['judul'] = 'Profile | CV Mushi Profile';
        $this->view('templatesKeuangan/header', $data);
        $this->view('keuangan/profile');
        $this->view('templatesKeuangan/footer');
    }
    public function inputlaporan()
    {
        $data['Gaji'] = $this->model('Transaksi_model')->Gaji();
        $data['judul'] = 'Input laporan | CV Mushi Profile';
        $this->view('templatesKeuangan/header', $data);
        $this->view('keuangan/inputlaporan', $data);
        $this->view('templatesKeuangan/footer');
    }
    public function daftarlaporan()
    {
        $data['judul'] = 'Daftar laporan | CV Mushi Profile';
        $data['laporan'] = $this->model('Transaksi_model')->getAllLaporan();
        $this->view('templatesKeuangan/header', $data);
        $this->view('keuangan/daftarlaporan', $data);
        $this->view('templatesKeuangan/footer');
    }
    public function cari()
    {
        $data['judul'] = 'Daftar laporan | CV Mushi Profile';
        $data['laporan'] = $this->model('Transaksi_model')->carila();
        $this->view('templatesKeuangan/header', $data);
        $this->view('keuangan/daftarlaporan', $data);
        $this->view('templatesKeuangan/footer');
    }
    public function tambahLaporan()
    {
        if ($this->model('Transaksi_model')->tambahLaporan($_POST) > 0) {
            Flasher::setLaporan('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/Manajerkeuangan/daftarlaporan');
            exit;
        } else {
            Flasher::setLaporan('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
            exit;
        }
    }
    public function cetaklaporan($Id_laporan)
    {
        $data['judul'] = 'laporan keuangan | CV Mushi Profile';
        $data['aktivalancar'] = $this->model('Transaksi_model')->AKTIVALANCAR();
        $data['aktivatetap'] = $this->model('Transaksi_model')->AKTIVATETAP();
        $data['kewajiban'] = $this->model('Transaksi_model')->KEWAJIBAN();
        $data['laporan'] = $this->model('Transaksi_model')->getLaporanbyid($Id_laporan);
        $data['Harga'] = $this->model('Transaksi_model')->Pemasukan();
        $data['Harga_awal'] = $this->model('Transaksi_model')->Pengeluaran();
        $this->view('templatescetak/header', $data);
        $this->view('cetak/cetaklaporan', $data);
        $this->view('templatescetak/footer');
    }


    public function hapuslaporan($id_laporan)
    {
        if ($this->model('Transaksi_model')->hapusDataLaporan($id_laporan) > 0) {
            Flasher::setLaporan('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/Manajerkeuangan/daftarlaporan');
            exit;
        } else {
            Flasher::setLaporan('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/Manajerkeuangan/daftarlaporan');
            exit;
        }
    }
    public function Ubah()
    {
        if ($this->model('User_model')->editDataPersonal($_POST) > 0) {

            Flasher::setFlash('Berhasil', 'diedit', 'success');
            header('location: ' . BASEURL . '/ManajerKeuangan/profle');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diedit', 'danger');
            header('location: ' . BASEURL . '/ManajerKeuangan/profile');
            exit;
        }
    }
}
