<div class="content">

    <div class="container mt-2">
        <h4 class="text-left"> DAFTAR KONSUMEN</h4>
        <hr>
        <div class="d-flex">
            <form action="<?= BASEURL; ?>karyawan/carikonsumen" method="POST" style="margin-left: auto;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan nama atau alamat...." name="cari" id="cari" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-primary text-light" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">

                <tr>
                    <th scope="col" class="text-center">Id Transaksi</th>
                    <th scope="col" class="text-center">Nama konsumen</th>
                    <th scope="col" class="text-center">Alamat Konsumen</th>
                    <th scope="col" class="text-center">Tanggal Transaksi</th>

                </tr>

            </thead>
            <tbody>
                <?php foreach ($data['konsumen'] as $k) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $k['Id_transaksi']; ?></th>
                        <td class="text-center"><?= $k['Nama_konsumen']; ?></td>
                        <td class="text-center"><?= $k['Alamat_konsumen']; ?></td>
                        <td class="text-center"><?= $k['Tgl_transaksi']; ?></td>



                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>