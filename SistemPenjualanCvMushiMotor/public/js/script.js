$(function(){

    $('#btn-tambah').on('click', function(){
        $('#formModal').modal('show')
        $('#formModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');  
    });



    $('.tampilModalUbah').on('click', function(){
        console.log('edit')
        $('#formModalLabel').html('Edit Data User');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/SistemPenjualanCvMushiMotor/public/Admin/UbahUser')

        const id_user = $(this).data('id_user')
       
        $.ajax({
            url: 'http://localhost/SistemPenjualanCvMushiMotor/public/Admin/getUbahUser',
            data: {id : id_user},
            method: 'post',
            dataType: 'json',
           
            // success: function(data){
            //     $('#nama').val(data.Nama);
            //     $('#username').val(data.Username);
            //     $('#email').val(data.Email);
            //     $('#password').val(data.Password);
            //     $('#tgl').val(data.Tgl_lahir);
            //     $('#telepon').val(data.No_telepon);
            //     $('#gaji').val(data.Gaji);
            //     $('#alamat').val(data.Alamat);
            //     $('#level').val(data.Level);
            //     $('#jk').val(data.Jenis_kelamin);
            //     $('#id_user').val(data.Id_user);
            // }
        })

    });


})

