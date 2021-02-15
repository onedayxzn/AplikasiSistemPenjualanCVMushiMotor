<?php
class Admin extends Controller
{
    public function index()
    {



        // echo "Test";
        $data['judul'] = 'Admin | CV Mushi Profile';
        $data['total_karyawan'] = $this->model('User_model')->total_karyawan();
        $data['total_kendaraan'] = $this->model('Kendaraan_model')->total_kendaraan();
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/index', $data);
        $this->view('templatesAdmin/footer');
    }

    public function profile()
    {

        $data['judul'] = 'Profile | CV Mushi Profile';
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/profile');
        $this->view('templatesAdmin/footer');
    }



    public function about()
    {
        $data['judul'] = 'About | CV Mushi Profile';
        $this->view('templatesAdmin/header', $data);
        $this->view('About/about');
        $this->view('templatesAdmin/footer');
    }


    public function daftarKaryawan()
    {
        $data['judul'] = 'Daftar Karyawan | CV Mushi Motor';
        $data['user'] = $this->model('User_model')->daftarUser();
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/daftarKaryawan', $data);
        $this->view('templatesAdmin/footer');
    }
    public function detail($Id_user)
    {
        $data['judul'] = 'Detail Karyawan | CV Mushi Motor';
        $data['user'] = $this->model('User_model')->getuserbyid($Id_user);
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/detail', $data);
        $this->view('templatesAdmin/footer');
    }

    public function daftarKendaraan()
    {
        $data['judul'] = 'Daftar Kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getAllkendaraan();

        // print_r($data['kendaraan']);
        // exit;
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/daftarKendaraan', $data);
        $this->view('templatesAdmin/footer');
    }
    public function detailKendaraan($Id_kendaraan)
    {
        $data['judul'] = 'Detail Kendaraan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->getkendaraanbyid($Id_kendaraan);
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/detailKendaraan', $data);
        $this->view('templatesAdmin/footer');
    }

    public function tambahUser()
    {
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
            exit;
        }
    }
    public function hapusUser($Id_user)
    {
        if ($this->model('User_model')->hapusDataUser($Id_user) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'Daftar Karyawan | CV Mushi Motor';
        $data['user'] = $this->model('User_model')->cariuser();
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/daftarKaryawan', $data);
        $this->view('templatesAdmin/footer');
    }
    public function carikendaraan()
    {
        $data['judul'] = 'Daftar Karyawan | CV Mushi Motor';
        $data['kendaraan'] = $this->model('Kendaraan_model')->carikendaraan();
        $this->view('templatesAdmin/header', $data);
        $this->view('admin/daftarKendaraan', $data);
        $this->view('templatesAdmin/footer');
    }

    public function editUser($Id_user)
    {
        $data['judul'] = 'Edit User | CV Mushi Motor';
        $data['user'] = $this->model('User_model')->getUserbyid($Id_user);
        $this->view('templatesAdmin/header', $data);
        $this->view('Admin/editUser', $data);
        $this->view('templatesAdmin/footer');
    }

    public function UbahUser()
    {

        if ($this->model('User_model')->editDataUser($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diedit', 'success');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
        } else {
            Flasher::setFlash('Gagal', 'diedit', 'danger');
            header('location: ' . BASEURL . '/Admin/daftarKaryawan');
            exit;
        }
    }

    public function Ubah()
    {
        if ($this->model('User_model')->editDataPersonal($_POST) > 0) {

            Flasher::setPersonal('Berhasil', 'diedit Silahkan Logout terlebih dahulu', 'success');
            header('location: ' . BASEURL . '/Admin/profile');
            exit;
        } else {
            Flasher::setPersonal('Gagal', 'diedit', 'danger');
            header('location: ' . BASEURL . '/Admin/profile');
            exit;
        }
    }
}
