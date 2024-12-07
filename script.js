function simpan(){
    var nama = document.getElementById("inpt_nama").value;
    var nim = document.getElementById("inpt_nim").value;
    var prodi = document.getElementById("inpt_prodi").value;

    document.getElementById("warning_nama").style.visibility = "hidden";
    document.getElementById("warning_nim").style.visibility = "hidden";
    document.getElementById("warning_prodi").style.visibility = "hidden";

    var jumlah_element = document.getElementsByName("form")
    var i ;
    for (i = 0; i < jumlah_element; i++){
        jumlah_element[i].getElementsByName("form").style.visibility = "hidden";
    }

    if(nama.length == 0) {
        document.getElementById("warning_nama").style.visibility = "visible";
        return false;
    }
    
    if(nim.length == 0) {
        document.getElementById("warning_nim").style.visibility = "visible";
        return false;
    }

    if(prodi.length == 0) {
        document.getElementById("warning_prodi").style.visibility = "visible";
        return false;
    }

    document.getElementById("simpan").innerHTML = "Processing ..";

    setTimeout(function (){
    document.getElementById("hasil_nama").innerHTML = nama;
    document.getElementById("hasil_nim").innerHTML = nim;
    document.getElementById("hasil_prodi").innerHTML = prodi;

    document.getElementById("inpt_nama").value = "";
    document.getElementById("inpt_nim").value = "";
    document.getElementById("inpt_prodi").value = "";

    document.getElementById("simpan").innerHTML = "Simpan";
    }, 1000)
}

const simpan2 = () => {
    alert('Test Notif 2');
}  