<div class="container">
    <h1 class="mt-5" style="text-align: center;">CV <span style="color: #BE2424;">MUSHI</span> MOTOR</h1>
    <form method="POST" action="<?= BASEURL; ?>/Login/proseslogin" action="<?= BASEURL; ?>/User_model/carilogin" class=" mx-auto border border-white p-3 bg-light" style="width: 30rem; margin-top: 40px; border-radius: 85px; box-shadow: 1px 2px 30px #fff;">
        <div class="ms-5">
            <h1 class="fs-2 text-center">LOGIN</h1>
        </div>
        <input type="hidden" name="nama" value="">
        <div class="mb-3 ms-5 me-5">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required />
            <input type="hidden" class="form-control" id="nama" name="nama" required />
        </div>
        <div class="mb-3 ms-5 me-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required />
        </div>
        <hr class="bg-dark">
        <div class="mb-3 ms-5 me-5 d-flex">
            <!-- modal -->
            <a class="text-decoration-none" data-toggle="modal" data-target="#exampleModal" href=""> Lupa Password ?</a>
            <a class="text-decoration-none" data-toggle="modal" style="margin-left:10rem ;" data-target="#exampleModal" href="">Belum memiliki akun?</a>
        </div>
        <button type="submit" class="btn btn-primary mb-3 ms-5 me-5" style="margin-left:22rem ;">LOGIN</button>

    </form>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PEMBERITAHUAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Silahkan tanyakan kepada bagian Administrator atau pimpinan anda Terimakasih
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ok</button>
            </div>
        </div>
    </div>
</div>