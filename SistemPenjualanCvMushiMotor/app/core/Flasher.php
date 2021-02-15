<?php

class Flasher
{
  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setConfirm($pesan, $aksi, $tipe)
  {

    $_SESSION['confirm'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setKendaraan($pesan, $aksi, $tipe)
  {
    $_SESSION['kendaraan'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setKendaraanMasuk($pesan, $aksi, $tipe)
  {
    $_SESSION['masukkendaraan'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setKendaraanKeluar($pesan, $aksi, $tipe)
  {
    $_SESSION['keluarkendaraan'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setLogin($pesan, $aksi, $tipe)
  {
    $_SESSION['login'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setTransaksi($pesan, $aksi, $tipe)
  {
    $_SESSION['transaksi'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setLaporan($pesan, $aksi, $tipe)
  {
    $_SESSION['laporan'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  public static function setPersonal($pesan, $aksi, $tipe)
  {
    $_SESSION['personal'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data User <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['flash']);
    }
  }

  public static function confirm()
  {
    if (isset($_SESSION['confirm'])) {
      echo '<div class="alert alert-' . $_SESSION['confirm']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Kendaraan <strong>' . $_SESSION['confirm']['pesan'] . '</strong> ' . $_SESSION['confirm']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['confirm']);
    }
  }
  public static function kendaraan()
  {
    if (isset($_SESSION['kendaraan'])) {
      echo '<div class="alert alert-' . $_SESSION['kendaraan']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Kendaraan  <strong>' . $_SESSION['kendaraan']['pesan'] . '</strong> ' . $_SESSION['kendaraan']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['masukkendaraan']);
    }
  }
  public static function masukkendaraan()
  {
    if (isset($_SESSION['masukkendaraan'])) {
      echo '<div class="alert alert-' . $_SESSION['masukkendaraan']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Kendaraan Masuk <strong>' . $_SESSION['masukkendaraan']['pesan'] . '</strong> ' . $_SESSION['masukkendaraan']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['masukkendaraan']);
    }
  }
  public static function keluarkendaraan()
  {
    if (isset($_SESSION['keluarkendaraan'])) {
      echo '<div class="alert alert-' . $_SESSION['keluarkendaraan']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Kendaraan Keluar <strong>' . $_SESSION['keluarkendaraan']['pesan'] . '</strong> ' . $_SESSION['keluarkendaraan']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['keluarkendaraan']);
    }
  }

  public static function login()
  {
    if (isset($_SESSION['login'])) {
      echo '<div class="alert alert-' . $_SESSION['login']['tipe'] . ' alert-dismissible fade show" role="alert">
            Hallo <span> ' . $_SESSION['username'] . ' Anda <strong>' . $_SESSION['login']['pesan'] . '</strong> ' . $_SESSION['login']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['login']);
    }
  }
  public static function transaksi()
  {
    if (isset($_SESSION['transaksi'])) {
      echo '<div class="alert alert-' . $_SESSION['transaksi']['tipe'] . ' alert-dismissible fade show" role="alert">
            DATA Transaksi <strong>' . $_SESSION['transaksi']['pesan'] . '</strong> ' . $_SESSION['transaksi']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['transaksi']);
    }
  }
  public static function laporan()
  {
    if (isset($_SESSION['laporan'])) {
      echo '<div class="alert alert-' . $_SESSION['laporan']['tipe'] . ' alert-dismissible fade show" role="alert">
            Laporan Keuangan <strong>' . $_SESSION['laporan']['pesan'] . '</strong> ' . $_SESSION['laporan']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['laporan']);
    }
  }

  public static function Personal()
  {
    if (isset($_SESSION['personal'])) {
      echo '<div class="alert alert-' . $_SESSION['personal']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Anda Telah <strong>' . $_SESSION['personal']['pesan'] . '</strong> ' . $_SESSION['personal']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['laporan']);
    }
  }
}
