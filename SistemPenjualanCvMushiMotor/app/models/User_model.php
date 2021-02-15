<?php

class User_model
{
    private $table = 'user';
    private $db;



    public function __construct()
    {
        $this->db = new Database;
    }

    public function daftarUser()
    {
        // $jumlahperhalaman = 6;
        // $result = mysqli_query($conn, "SELECT * FROM user");
        // $jumlahdata = mysqli_num_rows($result);
        //LIMIT 0, $jumlahperhalaman => untuk dalam query

        $query = "SELECT * FROM `user` Where not Level = 'Admin'";
        $this->db->query($query);
        return $this->db->resultSet();
        // $this->stmt = $this->dbh->prepare();
    }
    public function getuserbyid($Id_user)
    {
        $this->db->query("SELECT * FROM `" . $this->table . "` WHERE Id_user=:Id_user");
        $this->db->bind('Id_user', $Id_user);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {

        $query = "INSERT INTO user VALUES
                  ('', :Username, :Nama, :Email, :Password, :Level, :Alamat, :No_telepon, :Gaji, :Jenis_kelamin,'',:Tgl_lahir)";

        $this->db->query($query);
        $this->db->bind('Username', $data['username']);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Email', $data['email']);
        $this->db->bind('Password', md5($data['password']));
        $this->db->bind('Level', $data['level']);
        $this->db->bind('Alamat', $data['alamat']);
        $this->db->bind('No_telepon', $data['telepon']);
        $this->db->bind('Gaji', $data['gaji']);
        $this->db->bind('Jenis_kelamin', $data['jk']);
        $this->db->bind('Tgl_lahir', $data['tgl']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    //  function upload()
    // {
    //     $namaFile = $_FILES['photo']['name'];
    //     $error = $_FILES['photo']['error'];
    //     $tmpName = $_FILES['photo']['tmp_name'];

    //     //cek gambar
    //     if ($error === 4) {
    //         echo "<script> alert('pilih photo terlebih dahulu');</script>";
    //         return false;
    //     }
    //     $ektensiValid = ['jpg', 'jpeg', 'png'];
    //     $ektensi = explode('.', $namaFile);
    //     $ektensi = strtolower(end($ektensi));
    //     if (!in_array($ektensi, $ektensiValid)) {
    //         echo "<script> alert('pilih photo terlebih dahulu');</script>";
    //         return false;
    //     }
    //     move_uploaded_file($tmpName, 'public/img/' . $namaFile);
    //     return $namaFile;
    // }


    public function hapusDataUser($Id_user)
    {
        $query = "DELETE FROM user WHERE Id_user = :Id_user";
        $this->db->query($query);
        $this->db->bind('Id_user', $Id_user);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariuser()
    {
        $carikaryawan = $_POST['carikaryawan'];
        $query = "SELECT * FROM user WHERE Nama LIKE :carikaryawan  AND Level NOT LIKE '%Admin%'";
        $this->db->query($query);
        $this->db->bind('carikaryawan', "%$carikaryawan%");
        return $this->db->resultSet();
    }



    public function prosesLogin($Username, $Password)
    {

        $Username = !empty($_POST['username'])  ? ($_POST['username']) : null;
        $Password = !empty($_POST['password'])  ? ($_POST['password']) : null;


        $query = ("SELECT * FROM user where Username = :username AND Password = :password AND Level = 'Admin'");

        $this->db->query($query);
        $this->db->bind(':username', $Username);
        $this->db->bind(':password', md5($Password));

        $this->db->rowCount();


        return $this->db->single();



        // ':username' => $Username,
        // ':password' => $Password
    }



    public function prosesLogin1($Username, $Password)
    {

        $Username = !empty($_POST['username'])  ? ($_POST['username']) : null;
        $Password = !empty($_POST['password'])  ? ($_POST['password']) : null;


        $query = ("SELECT * FROM user where Username = :username AND Password = :password AND Level = 'Gudang'");

        $this->db->query($query);
        $this->db->bind(':username', $Username);
        $this->db->bind(':password', md5($Password));

        $this->db->rowCount();
        return $this->db->single();


        // ':username' => $Username,
        // ':password' => $Password
    }

    public function prosesLogin2($Username, $Password)
    {

        $Username = !empty($_POST['username'])  ? ($_POST['username']) : null;
        $Password = !empty($_POST['password'])  ? ($_POST['password']) : null;


        $query = ("SELECT * FROM user where Username = :username AND Password = :password AND Level = 'Karyawan'");

        $this->db->query($query);
        $this->db->bind(':username', $Username);
        $this->db->bind(':password', md5($Password));

        $this->db->rowCount();
        return $this->db->single();





        // ':username' => $Username,
        // ':password' => $Password
    }
    public function prosesLogin3($Username, $Password)
    {

        $Username = !empty($_POST['username'])  ? ($_POST['username']) : null;
        $Password = !empty($_POST['password'])  ? ($_POST['password']) : null;

        $_SESSION['username'] = $Username;
        $_SESSION['password'] = $Password;



        $query = ("SELECT * FROM user where Username = :username AND Password = :password AND Level = 'Manajemen Keuangan'");

        $this->db->query($query);
        $this->db->bind(':username', $Username);
        $this->db->bind(':password', md5($Password));


        $this->db->rowCount();
        return $this->db->single();





        // ':username' => $Username,
        // ':password' => $Password
    }
    public function editDataUser($data)
    {
        $id_user  = $data['id_user'];
        $nama = $data['nama'];
        $username = $data['username'];
        $email = $data['email'];
        $password = md5($data['password']);
        $tgl = $data['tgl'];
        $no_telepon = $data['no_telepon'];
        $gaji = $data['gaji'];
        $alamat = $data['alamat'];
        $jk = $data['jk'];
        $level = $data['level'];


        $query = "UPDATE user SET
                  Nama = '$nama', 
                  Username = '$username',
                  Email = '$email',
                  Password = '$password', 
                  Level = '$level',
                  Alamat = '$alamat',
                  No_telepon = '$no_telepon', 
                  Gaji = '$gaji', 
                  Jenis_kelamin = '$jk',  
                  Tgl_lahir = '$tgl'
                   WHERE Id_user = $id_user";

        $this->db->query($query);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataPersonal($data)
    {
        $id_user  = $data['id_user'];
        $nama = $data['nama'];
        $username = $data['username'];
        $email = $data['email'];
        $password = md5($data['password']);
        $tgl = $data['tgl'];
        $no_telepon = $data['no_telepon'];
        $alamat = $data['alamat'];




        $query = "UPDATE user SET
                  Nama = '$nama', 
                  Username = '$username',
                  Email = '$email',
                  Password = '$password', 
                  Alamat = '$alamat',
                  No_telepon = '$no_telepon',      
                  Tgl_lahir = '$tgl'
                   WHERE Id_user = $id_user";

        $this->db->query($query);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function daftarKonsumen()
    {
        // $jumlahperhalaman = 6;
        // $result = mysqli_query($conn, "SELECT * FROM user");
        // $jumlahdata = mysqli_num_rows($result);
        //LIMIT 0, $jumlahperhalaman => untuk dalam query

        $query = "SELECT * FROM `konsumen`";
        $this->db->query($query);
        return $this->db->resultSet();
        // $this->stmt = $this->dbh->prepare();
    }

    public function total_karyawan()
    {
        $query = "SELECT COUNT('Id_user') as total_karyawan from user ";
        $this->db->query($query);
        $this->db->bind('total_karyawan', "total_karyawan");
        return $this->db->resultSet();
    }
}
