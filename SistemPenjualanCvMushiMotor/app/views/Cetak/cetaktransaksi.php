<div class="content">
    <div class="container mt-5">
        <div class="d-flex">
            <div>
                <h2 class="text-left">MUSHI MOTOR</h2>
                <small style="margin-left:25px;"><ins>jl. sayuran No.7 Bandung</ins></small>
            </div>
            <div>
                <img src="<?= BASEURL; ?>img/motor.jpg" style="width: 100px; height:100px; margin-left:50rem">
            </div>
        </div>
        <div class="mt-3">
            <h3 class="text-center"><ins>KWITANSI</ins></h3>
            <div class="mt-5"></div>
            <div class="d-flex">
                <label for="">Sudah Terima Dari </label>
                <div style="margin-left: 2rem;">
                    <label for="">: <?= $_SESSION['username'] ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">Nama </label>
                <div style="margin-left: 6.8rem;">
                    <label for="">: <?= $data['cetaktransaksi']['Nama_konsumen']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">Alamat </label>
                <div style="margin-left: 6.2rem;">
                    <label for="">: <?= $data['cetaktransaksi']['Alamat_konsumen']; ?> </label>
                </div>
            </div>
            <small>Pembelian satu unit kendaraan bermotor dengan data-data sbb,</small>
            <div class="d-flex">
                <label for="">Harga </label>
                <div style="margin-left: 6.6rem;">
                    <label for="">:Rp. <?= $data['cetaktransaksi']['Harga']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">Merk </label>
                <div style="margin-left: 6.9rem;">
                    <label for="">: <?= $data['cetaktransaksi']['Merk']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">Jenis </label>
                <div style="margin-left: 6.7rem;">
                    <label for="">: <?= $data['cetaktransaksi']['Jenis']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">Tahun </label>
                <div style="margin-left: 6.4rem;">
                    <label for="">: <?= $data['cetaktransaksi']['Tahun']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">No polisi </label>
                <div style="margin-left: 5.2rem;">
                    <label for="">: <?= $data['cetaktransaksi']['No_polisi']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">No Rangka </label>
                <div style="margin-left: 4.5rem;">
                    <label for="">: <?= $data['cetaktransaksi']['No_rangka']; ?> </label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">No Mesin </label>
                <div style="margin-left: 5rem;">
                    <label for="">: <?= $data['cetaktransaksi']['No_Mesin']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">No BPKB </label>
                <div style="margin-left:5.2rem;">
                    <label for="">: <?= $data['cetaktransaksi']['No_bpkb']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">Warna </label>
                <div style="margin-left: 6.2rem;">
                    <label for="">: <?= $data['cetaktransaksi']['Warna']; ?></label>
                </div>
            </div>
            <div class="d-flex">
                <label for="">PERHATIAN</label>
                <div style="margin-left: 4rem;">
                    <label for="">: Setelah Kwitansi ini ditandatangani oleh penjual, maka segala resiko baik
                        <br>mengenai kendaraan bermotor tersebut maupun mengenai surat-suratnya <br>
                        mulai saat ini menjadi tanggung jawab pembeli sepenuhnya</label>
                </div>
            </div>



        </div>




    </div>

    <div class="container mt-3">
        <div class="text-right">Bandung, <?= $data['cetaktransaksi']['Tgl_transaksi']; ?></div>
        <br>
        <br><br>
        <div class="text-right"><?= $_SESSION['username']; ?></div>
    </div>

    <br>
    <br><br>

</div>

<script type="text/javascript">
    setTimeout(
        function() {
            window.location = "<?= BASEURL; ?>/karyawan/transaksi"
        },
        1000); // waktu tunggu atau delay
</script>

<script>
    window.print();
</script>