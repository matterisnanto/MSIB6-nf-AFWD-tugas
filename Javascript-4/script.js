let frm = document.getElementById('data');

//pilihan jabatan
let jab = ['Manajer', 'Asisten Manajer', 'Staf'];
let pilihanjab = `<option value="">--Pilih Jabatan--</option>`
for(let p in jab) {
    pilihanjab += `<option value="${jab[p]}">${jab[p]}</option>`;
};
frm.jabatan.innerHTML = pilihanjab

//pilihan status
let stat = ['Menikah', 'Belum Menikah']
let pilihanstat = `<option value="">--pilih status--</option>`
for(let q in stat) {
    pilihanstat += `<option value="${stat[q]}">${stat[q]}</option>`;
};
frm.status.innerHTML = pilihanstat

function output(){
    let nama = frm.nama.value
    let jabatan = frm.jabatan.value
    let status = frm.status.value
    
    //kondisi jabatan gaji
    let gaji;
    switch(jabatan){
        case 'Manajer' : gaji = 15000000; break;
        case 'Asisten Manajer' : gaji = 10000000; break;
        case 'Staf' : gaji = 5000000; break;
    }
    
    //operator
    let tj = gaji * 0.15
    let bpjs = gaji * 0.1
    let mnsbpjs = -bpjs
    let tk = (status == 'Menikah') ? gaji * 0.2 : 0; 
    jumlah = gaji + tj - bpjs + tk

    Swal.fire({
        html: `
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji</title>
    <style>
        h1 {
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        tbody tr td{
            border: 1px solid black;
            padding-left: 10px;
        }
        tfoot tr td{
            background-color: lightyellow;
            border: 1px solid black;
            padding-left: 10px;
        }
        footer p {
            display: flex;
            justify-content: center;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <fieldset>
        <h1>Slip Gaji</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>${nama}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>${jabatan}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>${status}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gaji Pokok</td>
                    <td colspan="2">${gaji}</td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan (15% dari gaji)</td>
                    <td colspan="2">${tj}</td>
                </tr>
                <tr>
                    <td>Tunjangan Keluarga (20% dari gaji)</td>
                    <td colspan="2">${tk}</td>
                </tr>
                <tr>
                    <td>BPJS (-10% dari gaji)</td>
                    <td colspan="2">${mnsbpjs}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Jumlah</th>
                    <td colspan="2">${jumlah}</td>
                </tr>
            </tfoot>
        </table>
        <hr>
    </fieldset>
    <footer>
        <p>copyright &copy; 2024 RACHMAT TRISNANTO</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
    <button onclick="Swal.close()">Close</button>
        `,
        
        showCloseButton: false,
        showConfirmButton: false,
        showCancelButton: false,
        allowOutsideClick: false,
      });

}
   