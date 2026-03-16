<!-- Nama : Ade Ayu F.
NIM : A11.2024.16024
Program Studi : Teknik Informatika -->
<?php
include "Mahasiswa.php";

echo "<h3>Data Mahasiswa:</h3>";

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData('A11.2024.16024', 'Ade Ayu F.', 'Teknik Informatika');
$mahasiswa1->tampilkanData(1);
echo "<br>";

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData('A11.2024.16015', 'Regita Octarisa', 'Teknik Informatika');
$mahasiswa2->tampilkanData(2);
echo "<br>";

$mahasiswa3 = new Mahasiswa();
$mahasiswa3->setData('A11.2024.16002', 'Mutiara Ramadhani', 'Teknik Informatika', 'SMKN 1 Randudongkal');
$mahasiswa3->tampilkanData(3);
