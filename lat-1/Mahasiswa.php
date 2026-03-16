<?php
class Mahasiswa
{
    private $nim, $nama, $matkul;

    public function setData($nim, $nama, $matkul)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
    }
    public function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'matkul' => $this->matkul
        ];
    }
}
