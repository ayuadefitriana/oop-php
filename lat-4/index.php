<!-- Nama : Ade Ayu F.
NIM : A11.2024.16024
Program Studi : Teknik Informatika -->

<?php
include "Mahasiswa.php";
include "MahasiswaTransfer.php";
include "MataKuliah.php";

// 
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$daftar_nilai = [
    "1" => ["sks" => 2, "nilai" => "A"],
    "2" => ["sks" => 3, "nilai" => "B"],
    "3" => ["sks" => 2, "nilai" => "C"],
];

$mahasiswa_1 = new MahasiswaTransfer($daftar_nilai);

$matkul_1->setData("A11.4023", "Pemrograman Web");
$matkul_2->setData("A11.4022", "Struktur Data");

$mahasiswa_1->setData("A11.2024.16024", "Ade Ayu F.", [$matkul_1, $matkul_2], "2006-01-01");

echo "<pre>";
print_r($mahasiswa_1->getData());
echo "</pre>";
