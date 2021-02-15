<div class="content">

    <div class="container mt-5">
        <?php Flasher::laporan(); ?>
        <h4 class="text-left"> DAFTAR LAPORAN</h4>
        <hr>
        <div class="d-flex">


            <form action="<?= BASEURL; ?>manajerkeuangan/cari" method="POST" style="margin-left: auto;">
                <div class="input-group">
                    <input type="date" class="form-control" placeholder="Cari berdasarkan tanggal atau bulan serta tahun" name="carila" id="carila" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-primary text-light" type="submit">Cari</button>
                    </div>
                </div>
            </form>

        </div>
        <br>



        <ul class="list-group border" style="width: 40rem; margin-top:20px;">
            <?php foreach ($data['laporan'] as $lp) : ?>
                <li class=" list-group-item"><?= $lp['Tgl_laporan']; ?>
                    <a href="<?= BASEURL; ?>/Manajerkeuangan/hapuslaporan/<?= $lp['Id_laporan']; ?>" class="badge badge-pill badge-danger float-right ml-2" onclick="return confirm('yakin akan menghapusnya?')">Hapus</a>
                    <a href="<?= BASEURL; ?>/Manajerkeuangan/cetaklaporan/<?= $lp['Id_laporan']; ?>" class="badge badge-pill badge-primary float-right ml-2" onclick="get()">CETAK</a>
                </li>
            <?php endforeach ?>


        </ul>
    </div>
</div>