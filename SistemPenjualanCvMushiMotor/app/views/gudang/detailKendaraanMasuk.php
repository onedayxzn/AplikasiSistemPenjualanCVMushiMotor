<div class="content">
    <div class="container mt-5">
        <h4 class="text-left"> DETAIL KENDARAAN MASUK </h4>
        <hr>
        <div class="card" style="width: 30rem; margin:auto;">
            <div class="card-body bg-info">
                <h2 class="card-title text-center text-white"><?= $data['kendaraan']['Merk']; ?></h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenis : <p><?= $data['kendaraan']['Jenis']; ?></p>
                </li>
                <li class="list-group-item">Tahun : <p><?= $data['kendaraan']['Tahun']; ?></p>
                </li>
                <li class="list-group-item">No polisi : <p><?= $data['kendaraan']['No_polisi']; ?></p>
                </li>
                <li class="list-group-item">No Mesin : <p><?= $data['kendaraan']['No_Mesin']; ?></p>
                </li>
                <li class="list-group-item">No Rangka : <p><?= $data['kendaraan']['No_rangka']; ?></p>
                </li>
                <li class="list-group-item">No BPKB : <p><?= $data['kendaraan']['No_bpkb']; ?></p>
                </li>
                <li class="list-group-item">Warna : <p><?= $data['kendaraan']['Warna']; ?></p>
                </li>
                <li class="list-group-item">Harga Awal : <p>Rp. <?= $data['kendaraan']['Harga_awal']; ?></p>
                </li>
                <li class="list-group-item">Harga : <p>Rp. <?= $data['kendaraan']['Harga']; ?></p>
                </li>
            </ul>
            <div class="card-body bg-warning">
                <a href="<?= BASEURL; ?>Admingudang/KendaraanMasuk" class="card-link text-white float-right">Kembali</a>
            </div>
        </div>
    </div>
    <br><br>
</div>