<div class="content">
  <?php Flasher::login(); ?>
  <div class="d-flex">
    <div class="card" style="width: 20rem;">
      <div class="card-header bg-primary">
        <i class="bi bi-people-fill text-light"> Data kendaraan</i>
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <h1 class="card-text text-center"></h1>
        <?php foreach ($data['total_kendaraan'] as $knd) : ?>
          <h5 class="card-title" id="total_kendaraan" name="total_kendaraan"><?= $knd['total_kendaraan']; ?></h5>
          <h1 class="card-text text-center"></h1>
        <?php endforeach ?>
        <hr>
        <a href="#" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
      </div>
    </div>
    <div class="card" style="margin-left: 3rem; width: 20rem; ">
      <div class="card-header bg-primary">
        <i class="bi bi-people-fill text-light"> Data Transaksi</i>
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <h1 class="card-text text-center"></h1>
        <?php foreach ($data['total_konsumen'] as $knm) : ?>
          <h5 class="card-title" id="totalKonsumen" name="totalKonsumen"><?= $knm['totalKonsumen']; ?></h5>
          <h1 class="card-text text-center"></h1>
        <?php endforeach ?>
        <hr>
        <a href="#" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
      </div>
    </div>
    <div class="card" style="margin-left: 3rem; width: 20rem; ">
      <div class="card-header bg-primary">
        <i class="bi bi-people-fill text-light"> Data Konsumen</i>
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <h1 class="card-text text-center"></h1>
        <?php foreach ($data['total_konsumen'] as $knm) : ?>
          <h5 class="card-title" id="totalKonsumen" name="totalKonsumen"><?= $knm['totalKonsumen']; ?></h5>
          <h1 class="card-text text-center"></h1>
        <?php endforeach ?>
        <hr>
        <a href="#" class="btn btn-primary">View detail<i class="bi bi-arrow-right-short"></i></a>
      </div>
    </div>
  </div>
</div>