<div class="content">
    <?php Flasher::login(); ?>
    <div class="d-flex">
        <div class="card" style="width: 20rem;">
            <div class="card-header bg-primary">
                <i class="bi bi-people-fill text-light">Total Pengeluaran </i>
            </div>
            <div class="card-body">
                <?php foreach ($data['Harga_awal'] as $hrga) : ?>
                    <h4 class="card-title" name="pengeluaran" id="pengeluaran" style="margin:2rem;">RP. <?= $hrga['pengeluaran']; ?></h4>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>


            </div>
        </div>
        <div class="card" style="margin-left: 3rem; width: 20rem; ">
            <div class="card-header bg-primary">
                <i class="bi bi-people-fill text-light"> Total Pemasukan</i>
            </div>
            <div class="card-body">
                <?php foreach ($data['Harga'] as $hrg) :  ?>
                    <h4 class="card-title" id="pemasukan" name="pemasukan" style="margin:2rem;">Rp. <?= $hrg['pemasukan']; ?></h4>
                    <h1 class="card-text text-center"></h1>
                <?php endforeach ?>


            </div>
        </div>
        <div class="card" style="margin-left: 3rem; width: 20rem; ">
            <div class="card-header bg-primary">
                <i class="bi bi-cash text-light"> Total Gaji</i>
            </div>
            <div class="card-body">
                <?php foreach ($data['Gaji'] as $gj) :  ?>
                    <h4 class="card-title" id="gaji" name="gaji" style="margin:2rem;">Rp. <?= $gj['gaji']; ?></h4>
                    <h1 class=" card-text text-center">
                    </h1>
                <?php endforeach ?>


            </div>
        </div>
    </div>
</div>