<div class="content">
    <div class="container mt-5">
        <?php Flasher::flash(); ?>
        <h4 class="text-left"> DAFTAR KARYAWAN</h4>
        <hr>
        <div class="d-flex">

            <button type="button" class="btn btn-primary btnTambahData" data-toggle="modal" data-target="#formModal">
                Tambah
            </button>
            <form action="<?= BASEURL; ?>Admin/cari" method="POST" style="margin-left: auto;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan nama " name="carikaryawan" id="carikaryawan" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-primary text-light" type="submit">Cari</button>
                    </div>
                </div>
            </form>

        </div>
        <br>

        <ul class="list-group" style="width: 40rem; height:20rem; margin-top:20px; overflow:auto;">
            <?php foreach ($data['user'] as $user) : ?>
                <li class="list-group-item"><?= $user['Nama']; ?> - <?= $user['Level']; ?>
                    <a href="<?= BASEURL; ?>/Admin/hapusUser/<?= $user['Id_user']; ?>" class="badge badge-pill badge-danger float-right ml-2" onclick="return confirm('yakin akan menghapusnya?')">hapus</a>
                    <a href="<?= BASEURL; ?>/Admin/editUser/<?= $user['Id_user']; ?>" class="badge badge-pill badge-warning float-right ml-2">edit</a>
                    <a href="<?= BASEURL; ?>/Admin/detail/<?= $user['Id_user']; ?>" class="badge badge-pill badge-primary float-right ml-2">detail</a>
                </li>

            <?php endforeach ?>
        </ul>
        <br><br><br>
    </div>
</div>


<!-- Modal Tambah and edit-->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form1" method="POST" action="<?= BASEURL; ?>/Admin/tambahUser" style="width: 28rem;" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" id="id_user">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                    <div class=" form-group">
                        <label for="telepon">Tanggal lahir</label>
                        <input type="date" class="form-control" id="tgl" name="tgl" required />
                    </div>
                    <div class=" form-group">
                        <label for="telepon">No Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" required />
                    </div>
                    <div class=" form-group">
                        <label for="gaji">Gaji</label>
                        <input type="number" class="form-control" id="gaji" name="gaji" required />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" aria-label="With textarea" id="alamat" name="alamat" required /></textarea>
                    </div>
                    <div class="form-group">
                        <label for="level">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk" style="width: 12rem;" required />
                        <option></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option Value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="level">Pilih level</label>
                        <select class="form-control" id="level" name="level" style="width: 12rem;" required />
                        <option></option>
                        <option Value="Karyawan">Karyawan</option>
                        <option value="Gudang">Gudang</option>
                        <option value="Manajemen Keuangan">Manajemen Keuangan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>