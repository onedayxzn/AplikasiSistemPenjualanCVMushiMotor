<div class="content">
    <div class="container mt-5">
        <h4 class="text-left"> EDIT KARYAWAN </h4>
        <hr>
        <div class="card" style="width: 35rem; margin:auto;">
            <form style="width: 30rem; margin:auto" method="POST" action="<?= BASEURL; ?>/Admin/ubahUser">
                <input type="hidden" id="id_user" name="id_user" value="<?= $data['user']['Id_user']; ?>">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['user']['Nama']; ?>" required />
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $data['user']['Username']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $data['user']['Email']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= $data['user']['Password']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $data['user']['Tgl_lahir']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">No Telepon</label>
                    <input type="number" class="form-control" id="no_telepon" name="no_telepon" value="<?= $data['user']['No_telepon']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Gaji</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" value="<?= $data['user']['Gaji']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Alamat</label>
                    <input type="textarea" class="form-control" id="alamat" name="alamat" value="<?= $data['user']['Alamat']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="level">Jenis Kelamin</label>
                    <select class="form-control" id="jk" name="jk" style="width: 12rem;" required />
                    <option><?= $data['user']['Jenis_kelamin']; ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option Value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="level">Pilih level</label>
                    <select class="form-control" id="level" name="level" style="width: 12rem;" required />
                    <option><?= $data['user']['Level']; ?></option>
                    <option Value="Karyawan">Karyawan</option>
                    <option value="Gudang">Admin Gudang</option>
                    <option value="Manajemen Keuangan">Manajemen Keuangan</option>
                    </select>
                </div>
                <!-- hidden item -->
                <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">

                <div>
                    <a href="<?= BASEURL; ?>/Admin/daftarkaryawan"> <button style="margin-left:18rem" type="button" class="btn btn-secondary"> Kembali </button> </a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
            <br>
        </div>
    </div>
    <br><br>
</div>