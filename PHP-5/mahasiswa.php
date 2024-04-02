<?php

$nama_kampus = [
  'Universitas Negeri Manado',
  'Universitas Pakuan',
  'Universitas Esa Unggul',
  'Sekolah Tinggi Manajemen Informatika dan Komputer Royal',
  'Politeknik Negeri Jember',
  'Universitas Pendidikan Ganesha',
  'Universitas Indraprasta PGRI',
  'STMIK Widya Cipta Dharma',
  'Sekolah Tinggi Teknologi Terpadu Nurul Fikri',
  'Universitas Qamarul Huda Badaruddin Bagu',
  'Universitas Gunadarma',
  'Universitas Yudharta Pasuruan',
  'Universitas Banten Jaya',
  'Universitas Amikom Purwokerto',
  'Institut Teknologi Indonesia',
  'Universitas Jabal Ghafur',
  'Universitas Raharja',
  'Universitas Dumai',
  'Universitas Katolik Santo Thomas',
  'Universitas Muhammadiyah Jakarta',
  'Universitas Negeri Makassar',
  'Universitas Muhammadiyah Riau',
  'Universitas Metamedia',
  'Universitas Putra Indonesia Yptk Padang',
  'Universitas Catur Insan Cendekia',
  'Politeknik Negeri Malang',
  'STMIK IM',
  'Universitas Mercu Buana',
  'Universitas Muria Kudus',
  'Universitas 17 Agustus 1945 Surabaya',
  'Universitas Jember',
  'Universitas Serang Raya',
  'Universitas Budi Luhur',
  'Universitas Yarsi',
  'Universitas Kuningan',
  'Universitas Sumatera Utara',
  'Universitas Sriwijaya',
  'Universitas Nusantara PGRI Kediri',
  'Universitas Semarang',
  'Universitas Muhammadiyah Bengkulu',
  'STMIK Widya Pratama',
  'STMIK Triguna Dharma',
  'Universitas Negeri Surabaya',
  'Politeknik Negeri Jember',
  'Universitas Dinamika',
  'Universitas KH. Bahaudin Mudhary Madura',
  'Universitas Bina Sarana Informatika',
  'Institut Bisnis Dan Informatika Kesatuan',
  'Universitas Pamulang',
  'Universitas Komputer Indonesia',
  'Institut Teknologi Adhi Tama Surabaya',
  'Universitas Kristen Immanuel',
  'Politeknik Negeri Banyuwangi',
  'Universitas Mikroskil',
  'Universitas Sulawesi Barat',
];

$mata_kuliah = [
    'Soft Skill', 'Desain Web', 'UI/UX',
    'Pemrograman JavaScript', 'Database MySQL/MariaDB', 'Pemrograman PHP',
    'Framework Laravel', 'Version Control System (VCS): Git/Github',
    'REST API'];

class mahasiswa
{
    public $nim;
    public $nama;
    public $nama_kampus;
    public $mata_kuliah;
    public $nilai;

    public function __construct($nim, $nama, $nama_kampus, $mata_kuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nama_kampus = $nama_kampus;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
    }

    public function Grade()
    {
        if ($this->nilai >= 80) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } elseif ($this->nilai >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function Predikat()
    {
        $grade = $this->Grade();
        switch ($grade) {
            case 'A':
                return 'Sangat Baik';
                break;
            case 'B':
                return 'Baik';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'D':
                return 'Kurang';
                break;
            case 'E':
                return 'Sangat Kurang';
                break;
            default:
                return 'Tidak Valid';
        }
    }

    public function Status()
    {
        if ($this->nilai >= 60) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }
}
