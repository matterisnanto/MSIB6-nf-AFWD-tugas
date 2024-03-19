function input(){
    let nama = document.getElementById('frm').nama.value;
    let pekerjaan = frm.pekerjaan.value;
    let hobi = frm.hobi.value;
    let input = `
    <tr>
        <td>nama</td>
        <td>${nama}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>`
    let no_input = 'maaf data anda belum terisi';
    let hasil = (nama && pekerjaan && hobi != '') ? input : no_input;


    document.getElementById('hasil').innerHTML = hasil;
}