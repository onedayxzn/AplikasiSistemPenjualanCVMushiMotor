<div class="content">

    <div class="container mt-5">
        <h4 class="text-left"> DAFTAR KENDARAAN</h4>
        <hr>
        <div class="d-flex">
            <form action="<?= BASEURL; ?>Admin/carikendaraan" method="POST" style="margin-left: auto;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan merk, jenis, tahun...." name="carikendaraan" id="carikendaraan" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-primary text-light" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div style="overflow: auto; height:20rem">
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
                            <td class="text-center">Rp. <?= $knd['Harga_awal']; ?></td>
                            <td class="text-center">Rp. <?= $knd['Harga']; ?></td>
                            <td class="text-center"><a href="<?= BASEURL; ?>/Admin/detailKendaraan/<?= $knd['Id_kendaraan']; ?>" class="badge badge-pill badge-primary">detail</a></td>

                        </tr>
                    <?php endforeach ?>

                </tbody>

            </table>
        </div>
    </div>
</div>