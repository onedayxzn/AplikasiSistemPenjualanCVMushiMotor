<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('Login/index', $data);
        $this->view('templates/footer');
    }
    public function proseslogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];



        $data = $this->model('User_model')->prosesLogin($username, $password);
        $data1 = $this->model('User_model')->prosesLogin1($username, $password);
        $data2 = $this->model('User_model')->prosesLogin2($username, $password);
        $data3 = $this->model('User_model')->prosesLogin3($username, $password);


        if ($data) {


            $_SESSION['id'] = $data['Id_user'];
            $_SESSION['nama'] = $data['Nama'];
            $_SESSION['email'] = $data['Email'];
            $_SESSION['level'] = $data['Level'];
            $_SESSION['alamat'] = $data['Alamat'];
            $_SESSION['no_telepon'] = $data['No_telepon'];
            $_SESSION['tgl_lahir'] = $data['Tgl_lahir'];
            $_SESSION['password'] = $data['Password'];


            Flasher::setLogin('Berhasil', 'Login', 'success');
            header('location: ' . BASEURL . '/Admin/index');
            exit;
        } else if ($data1) {

            $_SESSION['nama'] = $data1['Nama'];
            $_SESSION['email'] = $data1['Email'];
            $_SESSION['level'] = $data1['Level'];
            $_SESSION['alamat'] = $data1['Alamat'];
            $_SESSION['no_telepon'] = $data1['No_telepon'];
            $_SESSION['tgl_lahir'] = $data1['Tgl_lahir'];
            $_SESSION['password'] = $data1['Password'];




            Flasher::setLogin('Berhasil', 'Login', 'success');
            header('location: ' . BASEURL . '/Admingudang/index');
            exit;
        } else if ($data2) {
            $_SESSION['nama'] = $data2['Nama'];
            $_SESSION['email'] = $data2['Email'];
            $_SESSION['level'] = $data2['Level'];
            $_SESSION['alamat'] = $data2['Alamat'];
            $_SESSION['no_telepon'] = $data2['No_telepon'];
            $_SESSION['tgl_lahir'] = $data2['Tgl_lahir'];
            $_SESSION['password'] = $data2['Password'];
            Flasher::setLogin('Berhasil', 'Login', 'success');
            header('location: ' . BASEURL . '/karyawan/index');
            exit;
        } else if ($data3) {
            $_SESSION['nama'] = $data3['Nama'];
            $_SESSION['email'] = $data3['Email'];
            $_SESSION['level'] = $data3['Level'];
            $_SESSION['alamat'] = $data3['Alamat'];
            $_SESSION['no_telepon'] = $data3['No_telepon'];
            $_SESSION['tgl_lahir'] = $data3['Tgl_lahir'];
            $_SESSION['password'] = $data3['Password'];
            Flasher::setLogin('berhasil', 'Login', 'success');
            header('location: ' . BASEURL . '/ManajerKeuangan/index');
            exit;
        } else {
            header('location: ' . BASEURL . '/Login/gagal');
            exit;
        }
    }

    public function getLogin()
    {
        $username = $_POST['username'];
        $data['sesi'] = $this->model('User_model')->cekLogin($username);
        print_r($data['sesi']);
        exit;
    }

    public function gagal()
    {
        $data['judul'] = 'Gagal Login';
        $this->view('templatesCetak/header', $data);
        $this->view('Login/failed');
        $this->view('templatesCetak/footer');
    }

    public function logout()
    {
        session_destroy();
        header('location: ' . BASEURL . '/Login/index');
    }
}
