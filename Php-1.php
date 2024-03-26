<?php
$nama = 'Rachmat Trisnanto';
$Jenis_kelamin = 'Laki-laki';
$TTL = 'Bogor,1928';
$status = 'belum menikah';
$agama = 'islam';
$alamat = 'Bogor';
$notlp = 89272312414;
$email= 'email@';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiculum Vitae</title>
</head>
<body bgcolor= #E0CCBE>
    <h1 align="center">
        <b>Curiculum Vitae</b>
    </h1>
    <hr color="black">
    
    <img src="https://media.licdn.com/dms/image/C5603AQFVGab-A-c6WQ/profile-displayphoto-shrink_200_200/0/1653894582104?e=2147483647&v=beta&t=Yu7tNx_oM_aJA70-LZiDaCVYv5ctqF_WNJFUK7_l6cA" alt="" wifth="200" align="right" hspace="20">

    <ul>
        <li style="font-size:25px;"><b>Data Pribadi</b></li>
        <table>
            <tr>
                <td>Nama</td>
                <td>: <?= $nama ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?= $Jenis_kelamin ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal lahir</td>
                <td>: <?= $TTL ?></td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>: <?= $status ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: <?= $agama ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?= $alamat ?></td>
            </tr>
            <tr>
                <td>No.telepon</td>
                <td>: <?= $notlp ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?= $email ?></td>
            </tr>
        </table>
        <hr color="black">
        <li style="font-size:25px;"><b>Riwayat Pendidikan</b></li>
        <ul>
            <li style="font-weight: bold;">Formal</li>
            <ul>
                <li>2007-2013 : SD Negeri 01 Pabuaran</li>
                <li>2013-2016 : MTs Negeri Cibinong</li>
                <li>2016-2019 : SMK Negeri 01 Bojonggede</li>
            </ul>
            <li style="font-weight: bold;">Non Formal</li>
            <ul>
                <li>--</li>
            </ul>
        </ul>
        <hr color="black">
        <li style="font-size:25px;"><b>Kemampuan</b></li>
        <ul>
            <li>Kemampuan Komputer : MS.Office (MS Word, MS Excel, MS Power Point), Dasar Pemograman (Python, Html, Database, Css), Desain Grafis (Adobe Photoshop, Adobe Illustrator, Adobe After Effect, Corel Draw)</li>
            <li>kemampuan Bahasa Inggris</li>
            <li>Kemampuan sales</li>
        </ul>
        <hr color="black">
        <li style="font-size:25px;"><b>Pengalaman Kerja</b></li>
        <ul>
            <li style="font-weight: bold;">The Njonja gourmet cathering</li>
            <p>Parttime sebagai Waiters</p>
            <li style="font-weight: bold;">PT.Rekaguna</li>
            <p>Sebagai Telesurvey</p>
            <li style="font-weight: bold;">Pangkalan Gas Juhroni</li>
            <p>Sebagai Kurir Gas</p>
            <li style="font-weight: bold;">PT.Mitra Andal Sejati</li>
            <p>Sebagai SBA Captain Unilever</p>
        </ul>
    </ul>
</body>
</html>