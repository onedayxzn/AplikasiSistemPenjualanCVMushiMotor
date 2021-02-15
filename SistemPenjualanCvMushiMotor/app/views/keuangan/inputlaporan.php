<div class="input">
    <div class="content">
        <div class="container">
            <h2 class="text-center">laporan</h2>
            <hr>
            <div class="d-flex">
                <h5 class="text-left">Aktiva Lancar</h5>
                <small style="margin-left:auto">Note : data diinput dalam bentuk Rupiah</small>
            </div>
            <hr>
            <div class="container">
                <form class="container" method="POST" action="<?= BASEURL; ?>/Manajerkeuangan/tambahLaporan">
                    <div class="mb-2 row">
                        <label for="kas" class="col-sm-2 col-form-label">Kas dan Bank</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="kas" name="kas" required />
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="piutang" class="col-sm-2 col-form-label">Piutang Usaha</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="piutang" name="piutang" required />
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="kendaraan" class="col-sm-2 col-form-label">persedian kendaran</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="kendaran" name="kendaran" required />
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="service" class="col-sm-2 col-form-label">perlengkapan service</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="service" name="service" required />
                        </div>
                    </div>
                    <br><br>
                    <h5 class="text-left">Aktiva tetap</h5>
                    <hr>
                    <div class="mb-2 row">
                        <label for="gedung" class="col-sm-2 col-form-label">Gedung</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="gedung" name="gedung" required />
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="peralatan" class="col-sm-2 col-form-label">Service peralatan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="peralatan" name="peralatan" required />
                        </div>
                    </div>
                    <br><br>
                    <h5 class="text-left">Kewajiban</h5>
                    <hr>
                    <div class="mb-2 row">
                        <label for="utang" class="col-sm-2 col-form-label">Utang usaha</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="utang" name="utang" required />
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="utang" class="col-sm-2 col-form-label">Utang gaji</label>
                        <div class="col-sm-10">

                            <?php foreach ($data['Gaji'] as $gj) :  ?>
                                <input type="number" class="form-control" id="gj" name="gj" value="<?= $gj['gaji']; ?>" required />
                            <?php endforeach ?>

                        </div>
                    </div>
                    <br><br>

                    <h5 class="text-left">Modal</h5>
                    <hr>
                    <div class="mb-2 row">
                        <label for="gedung" class="col-sm-2 col-form-label">Modal Harian</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="modal" name="modal" required />
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="gedung" class="col-sm-2 col-form-label">Tanggal input</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" required />
                        </div>
                    </div>
                    <!-- hidden item -->

            </div>
            <br>
            <button type="submit" class="btn btn-warning" style="margin-left: 55rem;"><i class="bi bi-save"><span class="ml-1"> simpan </span></i></button>
            </form>
            <div>

            </div>
            <br>
            <br>
            <br>
        </div>
        <br>
    </div>
</div>
</div>

<!-- <style>
    .cetak {
        display: none;
        align-items: center;
    }

    .input {
        display: block;
    }

    .btinput {
        border: none;
    }
</style> -->

<!-- cetak
<div class="cetak">

    <div class="container mt-5">

        <div class="mt-3">
            <h3 class="text-center">Laporan</h3>
            <h5 class="text-center">NERACA</h5>
            <h5 class="text-center">Bulan <?= date('d-m-Y'); ?></h5>
        </div>
        <center>
            <button type="button" onclick="getCtk()" class="btn btn-warning" style="margin-left: 55rem;"><span class="ml-1"> CETAK </span></button>
            <div class="Container mt-5" style="width: 50rem ;">
                <div class="row" style="width: 45rem; margin:auto">

                    </form>
                    <div class="col border border-dark">
                        <b>
                            <div class="text-left">Aktiva</div>
                        </b>
                        <b>
                            <div class="text-left">Aktiva Lancar</div>
                        </b>
                        <div class="text-left">Kas dan Bank</div>
                        <div class="text-left">Piutang Usaha</div>
                        <div class="text-left">Persedian kendaraan</div>
                        <div class="text-left">Perlengkapan Service</div>
                        <b>
                            <div class="text-left">Jumlah Aktiva Lancar</div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Aktiva Tetap</div>
                        </b>
                        <div class="text-left">Gedung</div>
                        <div class="text-left">Peralatan Service</div>
                        <b>
                            <div class="text-left">Jumlah Aktiva Tetap</div>
                        </b>
                        <b>
                            <div class="text-left">Jumlah Aktiva</div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Kewajiban</div>
                        </b>
                        <div class="text-left">Utang Usaha</div>
                        <div class="text-left">Utang Gaji</div>
                        <b>
                            <div class="text-left">Jumlah kewajiban</div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Modal</div>
                        </b>
                        <div class="text-left">Jumlah Modal</div>
                        <b>
                            <div class="text-left">Jumlah kewajiban dan modal</div>
                        </b>

                    </div>
                    <div class="col col-lg-4 border border-dark" style="width: 10rem;">
                        <b>
                            <div class="text-left">Aktiva</div>
                        </b>
                        <b>
                            <div class="text-left">Aktiva Lancar</div>
                        </b>
                        <div class="text-left">

                        </div>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="KAS" name="KAS"></div>
                        </div>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="PIUTANG" name="PIUTANG"></div>
                        </div>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="KENDARAAN" name="KENDARAAN"></div>
                        </div>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="SERVICE" name="SERVICE"></div>
                        </div>
                        <b>
                            <div class="d-flex">Rp.
                                <div class="text-left"><input class="btinput" type="text" id="AKTIVALANCAR" name="AKTIVALANCAR"></div>
                            </div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Aktiva Tetap</div>
                        </b>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="GEDUNG" name="GEDUNG"></div>
                        </div>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="PERALATAN" name="PERALATAN"></div>
                        </div>
                        <b>
                            <div class="d-flex">Rp.
                                <div class="text-left"><input class="btinput" type="text" id="AKTIVATETAP" name="PERALATAN"></div>
                            </div>
                        </b>
                        <b>
                            <div class="d-flex">Rp.
                                <div class="text-left"><input class="btinput" type="text" id="AKTIVA" name="AKTIVA"></div>
                            </div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Kewajiban</div>
                        </b>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="UTANG" name="UTANG"></div>
                        </div>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="GAJI" name="GAJI"></div>
                        </div>
                        <b>
                            <div class="d-flex">Rp.
                                <div class="text-left"><input class="btinput" type="text" id="KEWAJIBAN" name="KEWAJIBAN"></div>
                            </div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Modal</div>
                        </b>
                        <div class="d-flex">Rp.
                            <div class="text-left"><input class="btinput" type="text" id="MODAL" name="MODAL"></div>
                        </div>
                        <b>
                            <div class="d-flex">Rp.
                                <div class="text-left"><input class="btinput" type="KandM" id="JM" name="JM"></div>
                            </div>
                        </b>
                    </div>
                </div>
            </div>
        </center>
        <div class="container mt-3">
            <div class="text-right">Bandung, <?= date("d-M-Y"); ?></div>
            <div class="text-right" style="margin-right:1rem;">MUSHI MOTOR</div>
            <br>
            <br><br>
            <div class="text-right">Sukma Ramadhan Asri</div>
        </div>

        <br>
        <br><br>


    </div> -->