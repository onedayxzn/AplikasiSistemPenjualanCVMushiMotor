<div class="content">
    <?php Flasher::transaksi(); ?>
    <div class="container mt-5">
        <h4 class="text-left">Transaksi</h4>
        <hr>

        <div class="container">
            <form class="container" action="<?= BASEURL; ?>/karyawan/tambahTransaksi" method="POST">
                <div class="mb-2 row">
                    <label for="terima" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="terima" name="nama" required />
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="terima" class="col-sm-2 col-form-label">Alamat </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="terima" name="alamat" required />
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Pilih Id Kendaraan</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="pilihkendaraan" name="pilihkendaraan" style="width: 20rem;" required />
                        <option></option>
                        <?php foreach ($data['kendaraanmasuk'] as $msk) : ?>
                            <option><?= $msk['Id_kendaraan']; ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>

                    <!-- hidden item -->
                    <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">
                </div>
        </div>
        <br>
        <button type="submit" class="btn btn-warning" style="margin-left: 55rem;"><i class="bi bi-save"><span class="ml-1"> simpan </span></i></button>
        </form>
        <br>
    </div>
    <br>

    <div class="container">
        <h3 class="mb-3">daftar transaksi</h3>
        <hr>
        <form action="<?= BASEURL; ?>Karyawan/cari" method="POST" style="margin-left: auto;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari berdarkan tgl transaksi, nama, atau merk" name="cari" id="cari" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary bg-primary text-light" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">ID_transaksi</th>
                    <th scope="col" class="text-center">Nama Konsumen</th>
                    <th scope="col" class="text-center">Alamat</th>
                    <th scope="col" class="text-center">Merk</th>
                    <th scope="col" class="text-center">Jenis</th>
                    <th scope="col" class="text-center">Harga</th>
                    <th scope="col" class="text-center">Tanggal Transaksi</th>
                    <th scope="col" class="text-center">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['transaksi'] as $trans) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $trans['Id_transaksi']; ?></th>
                        <td class="text-center"><?= $trans['Nama_konsumen']; ?></td>
                        <td class="text-center"><?= $trans['Alamat_konsumen']; ?></td>
                        <td class="text-center"><?= $trans['Merk']; ?></td>
                        <td class="text-center"><?= $trans['Jenis']; ?></td>
                        <td class="text-center"><?= $trans['Harga']; ?></td>
                        <td class="text-center"><?= $trans['Tgl_transaksi']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>karyawan/CetakTransaksi/<?= $trans['Id_transaksi']; ?>" class="badge badge-pill badge-warning text-dark">cetak</a>
                            <a href="<?= BASEURL; ?>/Karyawan/hapuskonsumen/<?= $trans['Id_transaksi']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('yakin akan menghapusnya?')">Hapus</a>
                        </td>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <br><br>
    </div>
</div>