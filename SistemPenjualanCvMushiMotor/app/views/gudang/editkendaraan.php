<div class="content">
    <div class="container mt-5">
        <h4 class="text-left"> EDIT KENDARAAN </h4>
        <hr>
        <div class="card" style="width: 35rem; margin:auto;">
            <form style="width: 30rem; margin:auto" method="POST" action="<?= BASEURL; ?>/Admingudang/editdataKendaraan">
                <input type="hidden" id="id_kendaraan" name="id_kendaraan" value="<?= $data['kendaraan']['Id_kendaraan']; ?>">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="<?= $data['kendaraan']['Merk']; ?>" required />
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $data['kendaraan']['Jenis']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Harga awal</label>
                    <input type="number" class="form-control" id="harga_awal" name="harga_awal" value="<?= $data['kendaraan']['Harga_awal']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" value="<?= $data['kendaraan']['Tahun']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">No Polisi</label>
                    <input type="text" class="form-control" id="no_polisi" name="no_polisi" value="<?= $data['kendaraan']['No_polisi']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">No Mesin</label>
                    <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="<?= $data['kendaraan']['No_Mesin']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">No rangka</label>
                    <input type="text" class="form-control" id="no_rangka" name="no_rangka" value="<?= $data['kendaraan']['No_rangka']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">No bpkb</label>
                    <input type="text" class="form-control" id="no_bpkb" name="no_bpkb" value="<?= $data['kendaraan']['No_bpkb']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" value="<?= $data['kendaraan']['Warna']; ?>" required /></input>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['kendaraan']['Harga']; ?>" required /></input>
                </div>
                <!-- hidden item -->
                <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">

                <div>
                    <a href="<?= BASEURL; ?>/Admingudang/daftarkendaraan"> <button style="margin-left:18rem" type="button" class="btn btn-secondary"> Kembali </button> </a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
            <br>
        </div>
    </div>
    <br><br>
</div>