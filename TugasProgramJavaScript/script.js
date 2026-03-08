function cekNilai(){

    var nim = document.getElementById("nim").value;
    var nilai = document.getElementById("nilai").value;
    var hasil = document.getElementById("hasil");

    if(nim == "" || nilai == ""){
        hasil.innerHTML = "Data belum lengkap";
        return;
    }

    var huruf = "";

    if(nilai >= 80){
        huruf = "A";
    }
    else if(nilai >= 70){
        huruf = "B";
    }
    else if(nilai >= 60){
        huruf = "C";
    }
    else if(nilai >= 50){
        huruf = "D";
    }
    else{
        huruf = "E";
    }

    hasil.innerHTML = "NIM : " + nim + "<br>Nilai : " + nilai + "<br>Grade : " + huruf;

}