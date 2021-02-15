$(function(){

    $('.btnTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Kendaraan');
        $('.modal-footer button[type=submit]').html('Tambah');
    });


    $('.tampilModalUbah').on('click', function(){
        console.log('edit')
        $('#formModalLabel').html('Edit Data Kendaraan');
        $('.modal-footer button[type=submit]').html('EDIT');
        $('.modal-body form').attr('action', 'http://localhost/SistemPenjualanCvMushiMotor/public/Admingudang/UbahKendaraan')

        const Id_kendaraan = $(this).data('Id_kendaraan')
       
        $.ajax({
            url: 'http://localhost/SistemPenjualanCvMushiMotor/public/Admingudang/getUbahKendaraan',
            data: {Id_kendaraan : Id_kendaraan},
            method: 'post',
            dataType: 'json',
           
            success: function(data){
                $('#Merk').val(data.Merk);
                $('#Jenis').val(data.Jenis);
                $('#Harga_awal').val(data.Harga_awal);
                $('#Tahun').val(data.Tahun);
                $('#No_polisi').val(data.No_polisi);
                $('#No_mesin').val(data.No_mesin);
                $('#No_rangka').val(data.No_rangka);
                $('#No_bpkb').val(data.No_bpkb);
                $('#Warna').val(data.Warna);
                $('#Harga').val(data.Harga);
                $('#Id_kendaraan').val(data.Id_kendaraan);
            }
        })

    });


})