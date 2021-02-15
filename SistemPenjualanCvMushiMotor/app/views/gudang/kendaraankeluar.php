<div class="content">
    <?php Flasher::keluarkendaraan(); ?>
    <div class="container mt-5">
        <h4 class="text-left"> DAFTAR KENDARAAN KELUAR</h4>
        <hr>
        <div class="d-flex">
            <form action="<?= BASEURL; ?>Admingudang/carikendaraanKeluar" method="POST" style="margin-left: auto;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan id atau tgl keluar...." name="carikendaraanKeluar" id="carikendaraanKeluar" autocomplete="off">
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
                    <th scope="col" class="text-center">Tanggal KELUAR</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['keluar'] as $klr) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $klr['Id_kendaraan']; ?></th>
                        <td class="text-center"><?= $klr['Tgl_keluar']; ?></td>
                        <td class="text-center"> <a href="<?= BASEURL; ?>/Admingudang/detailkeluar/<?= $klr['Id_kendaraan']; ?>" class="badge badge-pill badge-primary">detail</a>
                            <a href="<?= BASEURL; ?>/Admingudang/hapusKendaraanKeluar/<?= $klr['Id_kendaraanKeluar']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('yakin ingin menghapusnya')">hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="TambahKendaraan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kendaraan Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form style="width: auto;" method="POST" action="<?= BASEURL; ?>Admingudang/tambahKendaraanKeluar">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Id Kendaraan</label>
                        <select class="form-control" id="pilihkendaraan" name="pilihkendaraan">
                            <?php foreach ($data['kendaraan'] as $knd) : ?>
                                <option><?= $knd['Id_kendaraan']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Tanggal Keluar</label>
                        <input type="date" name="tanggal" required />
                    </div>
                    <div>
                        <button style="margin-left:19rem" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>