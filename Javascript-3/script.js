function input(){
    let nama = document.getElementById('frm').nama.value;
    let pekerjaan = document.getElementById('frm').pekerjaan.value;
    let hobi = document.getElementById('frm').hobi.value;
    let input = 'Hasil Input Anda' + '<br>nama : ' + nama + '<br>pekerjaan : ' + pekerjaan + '<br>hobi : ' + hobi;
    let no_input = 'maaf data anda belum terisi';
    let hasil = (nama && pekerjaan && hobi != '') ? input : no_input;


    document.getElementById('hasil').innerHTML = hasil;
}