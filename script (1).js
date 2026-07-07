function validasi(){

let status=true;

document.getElementById("errWA").innerHTML="";
document.getElementById("errDurasi").innerHTML="";
document.getElementById("errNama").innerHTML="";

let nama=document.getElementById("nama").value;

let wa=document.getElementById("wa").value;

let durasi=document.getElementById("durasi").value;

if(nama==""){

document.getElementById("errNama").innerHTML="Nama harus diisi";

status=false;

}

if(!/^[0-9]+$/.test(wa) || wa.length<10){

document.getElementById("errWA").innerHTML="WA minimal 10 digit angka";

status=false;

}

if(durasi<1 || durasi>5){

document.getElementById("errDurasi").innerHTML="Durasi 1 - 5 jam";

status=false;

}

return status;

}