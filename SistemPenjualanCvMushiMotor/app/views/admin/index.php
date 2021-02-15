<div class="content">
    <?php Flasher::login(); ?>

    <div class="d-flex">
        <div class="card" style="width: 20rem;">
            <div class="card-header bg-primary">
                <i class="bi bi-people-fill text-light"> Data Karyawan</i>
            </div>
            <div class="card-body">
                <?php foreach ($data['total_karyawan'] as $k) : ?>
                    <h5 class="card-title" id="total_karyawan" name="total_karyawan"><?= $k['total_karyawan']; ?></h5>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>
                <hr>
                <a href="<?= BASEURL; ?>/Admin/daftarkaryawan/" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
        <div class="card" style="margin-left: 3rem; width: 20rem; ">
            <div class="card-header bg-primary">
                <i class="bi bi-people-fill text-light"> Data kendaraan</i>
            </div>
            <div class="card-body">
                <?php foreach ($data['total_kendaraan'] as $knd) : ?>
                    <h5 class="card-title" id="total_kendaraan" name="total_kendaraan"><?= $knd['total_kendaraan']; ?></h5>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>
                <hr>
                <a href="<?= BASEURL; ?>/Admin/daftarKendaraan/" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>
    </div>
</div>