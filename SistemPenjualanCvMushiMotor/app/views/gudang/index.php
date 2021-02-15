<div class="content">
    <?php Flasher::login(); ?>
    <div class="d-flex">
        <div class="card" style="width: 20rem;">
            <div class="card-header bg-primary">
                <span class="material-icons text-white">two_wheeler</span> <span class="text-white">Data kendaraan </span>
            </div>
            <div class="card-body">
                <?php foreach ($data['total_kendaraan'] as $knd) : ?>
                    <h5 class="card-title" id="total_kendaraan" name="total_kendaraan">TOTAL : <?= $knd['total_kendaraan']; ?> Kendaraan</h5>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>
                <hr>
                <a href="<?= BASEURL; ?>/AdminGudang/daftarkendaraan" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
        <div class="card" style="margin-left: 3rem; width: 20rem; ">
            <div class="card-header bg-primary">
                <span class="material-icons text-white">two_wheeler</span> <span class="text-white">Data kendaraan Masuk</span>
            </div>
            <div class="card-body">
                <?php foreach ($data['total_kendaraanMasuk'] as $tkm) : ?>
                    <h5 class="card-title" id="total_kendaraanMasuk" name="total_kendaraanMasuk">TOTAL : <?= $tkm['total_kendaraanMasuk']; ?> Kendaraan</h5>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>
                <hr>
                <a href="<?= BASEURL; ?>/AdminGudang/kendaraanmasuk" class=" btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
        <div class="card" style="margin-left: 3rem; width: 20rem; ">
            <div class="card-header bg-primary">
                <span class="material-icons text-white">two_wheeler</span> <span class="text-white">Data kendaraan Keluar</span>
            </div>
            <div class="card-body">
                <?php foreach ($data['total_kendaraanKeluar'] as $tkk) : ?>
                    <h5 class="card-title" id="total_kendaraanKeluar" name="total_kendaraanKeluar">TOTAL : <?= $tkk['total_kendaraanKeluar']; ?> Kendaraan</h5>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>
                <hr>
                <a href="<?= BASEURL; ?>/AdminGudang/kendaraankeluar" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </div>

</div>