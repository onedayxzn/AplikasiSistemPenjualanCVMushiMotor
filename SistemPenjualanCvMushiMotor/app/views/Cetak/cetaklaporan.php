<div class="content">
    <div class="container mt-5">

        <div class="mt-3">
            <h3 class="text-center">LAPORAN</h3>
            <h5 class="text-center">NERACA</h5>
            <h5 class="text-center"><?= $data['laporan']['Tgl_laporan']; ?></h5>
        </div>
        <center>

            <div class="Container mt-5" style="width: 50rem ;">
                <div class="row" style="width: 45rem; margin:auto">
                    <div class="col border border-dark">
                        <b>
                            <div class="text-left">Aktiva</div>
                        </b>
                        <b>
                            <div class="text-left">Aktiva Lancar</div>
                        </b>
                        <div class="text-left">Kas dan Bank</div>
                        <div class="text-left">Piutang Usaha</div>
                        <div class="text-left">Perlengkapan Service</div>
                        <div class="text-left">Persedian kendaraan</div>
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

                        </b>
                        <br>
                        <b>
                            <div class="text-left">Kewajiban</div>
                        </b>
                        <div class="text-left">Utang Usaha</div>
                        <div class="text-left">Gaji</div>
                        <b>
                            <div class="text-left">Jumlah kewajiban</div>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Modal</div>
                        </b>
                        <div class="text-left">Jumlah Modal</div>
                        <br>
                        <div class="text-left">Pengeluaran</div>
                        <div class="text-left">Pemasukan</div>



                    </div>

                    <div class="col col-lg-4 border border-dark" style="width: 10rem;">
                        <b>
                            <div class="text-left">Aktiva</div>
                        </b>
                        <b>
                            <div class="text-left">Aktiva Lancar</div>
                        </b>
                        <div class="text-left">
                            <input type="hidden" name="id_laporan" value="<?= $data['aktivalancar']['Id_laporan']; ?>">
                        </div>
                        <div class="text-left" id="KAS" name="KAS"><?= $data['laporan']['Kas']; ?></div>
                        <div class="text-left" id="PIUTANG"><?= $data['laporan']['Piutang']; ?></div>
                        <div class="text-left" id="KENDARAAN"><?= $data['laporan']['Persediaan_kendaraan']; ?></div>
                        <div class="text-left" id="SERVICE"><?= $data['laporan']['Service']; ?></div>
                        <b>
                            <?php foreach ($data['aktivalancar'] as $al) :  ?>
                                <div class="text-left" id="AKTIVALANCAR"><?= $al['aktivalancar']; ?></div>
                            <?php endforeach ?>
                        </b>
                        <br>
                        <b>
                            <div class="text-left">Aktiva Tetap</div>
                        </b>
                        <div class="text-left"><?= $data['laporan']['Gedung']; ?></div>
                        <div class="text-left"><?= $data['laporan']['Peralatan']; ?></div>

                        <b>
                            <?php foreach ($data['aktivatetap'] as $at) :  ?>
                                <div class="text-left"><?= $at['aktivatetap']; ?></div>
                            <?php endforeach ?>
                        </b>
                        <b>

                        </b>
                        <br>
                        <b>
                            <div class="text-left">Kewajiban</div>
                        </b>
                        <div class="text-left"><?= $data['laporan']['Utang']; ?></div>
                        <div class="text-left"><?= $data['laporan']['Gaji_karyawan']; ?></div>
                        <b>
                            <?php foreach ($data['kewajiban'] as $k) :  ?>
                                <div class="text-left"><?= $k['kewajiban']; ?></div>
                            <?php endforeach ?>
                        </b>
                        <br>
                        <b>
                            <div class="text-left"><?= $data['laporan']['Modal']; ?></div>
                        </b>
                        <div class="text-left"><?= $data['laporan']['Modal']; ?></div>
                        <br>
                        <?php foreach ($data['Harga_awal'] as $hrga) : ?>
                            <div class="text-left"> <?= $hrga['pengeluaran']; ?></div>
                        <?php endforeach ?>
                        <?php foreach ($data['Harga'] as $hrg) : ?>
                            <div class="text-left"><?= $hrg['pemasukan']; ?></div>
                        <?php endforeach ?>



                    </div>
                </div>
            </div>
        </center>
        <div class="container mt-3">
            <div class="text-right">Bandung, <?= $data['laporan']['Tgl_laporan']; ?></div>
            <div class="text-right" style="margin-right:1rem;">MUSHI MOTOR</div>
            <br>
            <br><br>
            <div class="text-right"><?= $_SESSION['nama']; ?></div>
        </div>

        <br>
        <br><br>

    </div>

    <script type="text/javascript">
        setTimeout(
            function() {
                window.location = "<?= BASEURL; ?>/Manajerkeuangan/daftarlaporan"
            },
            1000); // waktu tunggu atau delay
    </script>

    <script>
        window.print();
    </script>