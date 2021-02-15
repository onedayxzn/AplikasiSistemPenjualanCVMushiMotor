<div class="content">

    <div class="container mt-5">
        <?php Flasher::kendaraan(); ?>
        <h4 class="text-left"> DAFTAR KENDARAAN</h4>
        <hr>
        <div class="d-flex">
            <form action="<?= BASEURL; ?>Admingudang/carikendaraan" method="POST" style="margin-left: auto;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan merk dan harga awal" name="carikendaraan" id="carikendaraan" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-primary text-light" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#TambahKendaraan"><i class="bi bi-pencil-square mr-1"></i>Tambah</button>
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">ID_kendaraan</th>
                    <th scope="col" class="text-center">Merk</th>
                    <th scope="col" class="text-center">Jenis</th>
                    <th scope="col" class="text-center">Tahun</th>
                    <th scope="col" class="text-center">Harga Awal</th>
                    <th scope="col" class="text-center">Harga Jual</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['kendaraan'] as $knd) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $knd['Id_kendaraan']; ?></th>
                        <td class="text-center"><?= $knd['Merk']; ?></td>
                        <td class="text-center"><?= $knd['Jenis']; ?></td>
                        <td class="text-center"><?= $knd['Tahun']; ?></td>
                        <td class="text-center"><?= $knd['Harga_awal']; ?></td>
                        <td class="text-center"><?= $knd['Harga']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/Admingudang/detailKendaraan/<?= $knd['Id_kendaraan']; ?>" class="badge badge-pill badge-primary">detail</a>
                            <a href="<?= BASEURL; ?>/Admingudang/editKendaraan/<?= $knd['Id_kendaraan']; ?>" class="badge badge-pill badge-warning">edit</a>
                            <a href="<?= BASEURL; ?>/Admingudang/hapusKendaraan/<?= $knd['Id_kendaraan']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('yakin ingin menghapusnya')">hapus</a>
                        </td>


                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- modal -->
    <div class="modal fade" id="TambahKendaraan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kendaraan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form style="width: auto;" method="POST" action="<?= BASEURL; ?>/Admingudang/tambahKendaraan">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" required />
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Jenis</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Harga awal</label>
                            <input type="number" class="form-control" id="harga_awal" name="harga_awal" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tahun</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No Polisi</label>
                            <input type="text" class="form-control" id="no_polisi" name="no_polisi" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No Mesin</label>
                            <input type="text" class="form-control" id="no_mesin" name="no_mesin" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No rangka</label>
                            <input type="text" class="form-control" id="no_rangka" name="no_rangka" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No bpkb</label>
                            <input type="text" class="form-control" id="no_bpkb" name="no_bpkb" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna" required /></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required /></input>
                        </div>
                        <!-- hidden item -->
                        <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">




                        <div>
                            <button style="margin-left:18rem" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->