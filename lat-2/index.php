<!-- Nama : Ade Ayu F.
NIM : A11.2024.16024
Program Studi : Teknik Informatika -->
<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$matkul_1->setData("A11.4023", "Pemrograman Web");
$matkul_2->setData("A11.4022", "Struktur Data");

$mahasiswa_1->setData("A11.2024.16024", "Ade Ayu F.", [$matkul_1->getData(), $matkul_2->getData()]);

echo "<pre>";
print_r($mahasiswa_1);
print_r($mahasiswa_1->nama);
print_r($mahasiswa_1->nim);
echo "</pre>";
