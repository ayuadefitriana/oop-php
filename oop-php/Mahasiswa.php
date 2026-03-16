<!-- Nama : Ade Ayu F.
NIM : A11.2024.16024
Program Studi : Teknik Informatika -->
<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $status;
    public $asalSekolah;

    public function __construct()
    {
        $this->status = "Aktif";
    }

    public function setData($nim, $nama, $prodi, $asalSekolah = null)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->asalSekolah = $asalSekolah;
    }

    public function tampilkanData()
    {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
        echo "Status: " . $this->status . "<br>";

        if ($this->asalSekolah) {
            echo "Asal sekolah " . $this->asalSekolah . "<br>";
        }
    }
}
