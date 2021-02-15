
    function getVal() {

        document.getElementsByClassName("cetak")[0].style.display = 'block';
        document.getElementsByClassName("input")[0].style.display = 'none';
        document.getElementsByTagName("header")[0].style.display = 'none';
        document.getElementsByClassName("sidebar")[0].style.display = 'none';

    }
    
    function get(){

        var KAS = eval(document.getElementById('KAS').value);
        var PIUTANG = eval( document.getElementById('PIUTANG').value);
        var KENDARAAN = eval(document.getElementById('KENDARAAN').value);
        var SERVICE = eval(document.getElementById('SERVICE').value);
        var GEDUNG = eval(document.getElementById('gedung').value);
        var PERALATAN = eval(document.getElementById('peralatan').value);
        var UTANG = eval(document.getElementById('utang').value);
        var GAJI = eval(document.getElementById('gaji').value);
        var MODAL = eval(document.getElementById('modal').value);
        
        //hitung
        var aktiva_lancar = KAS + PIUTANG + KENDARAAN + SERVICE;
        var aktiva_tetap = GEDUNG + PERALATAN;
        var aktiva = aktiva_lancar + aktiva_tetap;
        var kewajiban = UTANG + GAJI;
        var JM = kewajiban + MODAL;

        // document.getElementById('KAS').value = KAS;
        // document.getElementById('PIUTANG').value = PIUTANG;
        // document.getElementById('KENDARAAN').value = KENDARAAN;
        // document.getElementById('SERVICE').value = SERVICE;
        document.getElementById('GEDUNG').value = GEDUNG;
        document.getElementById('PERALATAN').value = PERALATAN;
        document.getElementById("AKTIVALANCAR").value = aktiva_lancar;
        document.getElementById("UTANG").value = UTANG;
        document.getElementById("GAJI").value = GAJI;
        document.getElementById("AKTIVATETAP").value = aktiva_tetap;
        document.getElementById("KEWAJIBAN").value = kewajiban;
        document.getElementById("MODAL").value = MODAL;
        document.getElementById("JM").value = JM;
        document.getElementById("AKTIVA").value = aktiva;

        
    }

     function getCtk(){
         document.getElementsByTagName("button")[1].style.display = 'none'
         document.getElementsByTagName("span")[1].style.display = 'none'

        window.print();
    }

 