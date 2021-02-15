<div class="content">
    <center>
        <div class="container">
            <?php Flasher::flash(); ?>
            <div class="card rounded-circle border border-dark" style="width: 10rem; height:10rem">
                <img src="<?= BASEURL; ?>img/profile.jpg" class="card-img-bottom" alt="...">
            </div>
    </center>

    <form class="mt-4 bg-light" style="margin-left: 17rem;" method="POST">
        <fieldset disabled>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="username" name="username">Username</span>
                </div>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?= $_SESSION['username']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="nama" name="nama">Nama</span>
                </div>
                <input type="text" class="form-control" aria-label="Nama" aria-describedby="basic-addon1" value="<?= $_SESSION['nama']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Email">Email</span>
                </div>
                <input type="email" class="form-control" aria-label="Email" aria-describedby="basic-addon1" value="<?= $_SESSION['email']; ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Tgl_lahir">Tanggal lahir</span>
                </div>
                <input type="text" class="form-control" aria-label="tgl_lahir" aria-describedby="basic-addon1" value="<?= $_SESSION['tgl_lahir']; ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="No_telepon">No telepon</span>
                </div>
                <input type="number" class="form-control" aria-label="No_telepon" aria-describedby="basic-addon1" value="<?= $_SESSION['no_telepon']; ?>">
            </div>


            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"><?= $_SESSION['alamat']; ?></textarea>
            </div>
        </fieldset>
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-pencil-square mr-1"></i>Edit</button>
    </form>
    <br><br>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form style="width: auto;" action="<?= BASEURL; ?>/ManajerKeuangan/Ubah" method="POST">
                    <div class="form-group">
                        <input type="hidden" id="id_user" name="id_user" value="<?= $_SESSION['id']; ?>">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $_SESSION['username']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $_SESSION['nama']; ?>" required /></input>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email</label>
                        <input type="Email" class="form-control" id="email" name="email" value="<?= $_SESSION['email']; ?>" required /></input>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">No telepon</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $_SESSION['no_telepon']; ?>" required /></input>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Password</label>
                        <input type="Password" class="form-control" id="password" name="password" value="<?= $_SESSION['password']; ?>" required /></input>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $_SESSION['tgl_lahir']; ?>" required /></input>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required /><?= $_SESSION['alamat']; ?></textarea>
                    </div>

                    <div>
                        <button style="margin-left:20rem" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
</div>