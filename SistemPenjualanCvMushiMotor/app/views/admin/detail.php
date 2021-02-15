<div class="content">

    <div class="container mt-5">
        <h4 class="text-left"> DETAIL </h4>
        <hr>
        <div class="card" style="width: 18rem; margin:auto">
            <div class="card-body ">
                <h5 class="card-title"><?= $data['user']['Nama']; ?> <?php echo ' | ' ?> <?= $data['user']['Level']; ?> </h5>
                <h6 class="card-subtitle  text-dark">username : <?= $data['user']['Username']; ?></h6>
                <p class="card-text">email : <?= $data['user']['Email']; ?></p>
                <p class="card-text">Tgl lahir : <?= $data['user']['Tgl_lahir']; ?></p>
                <p class="card-text">Jenis kelamin : <?= $data['user']['Jenis_kelamin']; ?></p>
                <p class="card-text">No telepon : <?= $data['user']['No_telepon']; ?></p>
                <p class="card-text">Gaji : <?= $data['user']['Gaji']; ?></p>
                <p class="card-text">Alamat : <?= $data['user']['Alamat']; ?></p>
                <a href="<?= BASEURL; ?>/Admin/daftarKaryawan" class="card-link">kembali</a>
            </div>
        </div>
        <br><br>
    </div>

</div>