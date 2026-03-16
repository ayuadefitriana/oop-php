<?php
class MahasiswaTransfer extends Mahasiswa
{
    private $daftar_nilai, $ipk = 0, $ttl_sks = 0, $ttl_bobot = 0;
    private $bobot = ['A' => 4, 'B' => 3, 'C' => 2, 'D' => 1, 'E' => 0];

    public function __construct($daftar_nilai)
    {
        $this->daftar_nilai = $daftar_nilai;
        $this->getIPK();
        $this->status = "Tidak Aktif";
    }

    public function getIPK()
    {
        if(!empty($this->daftar_nilai)) {
            foreach ($this->daftar_nilai as $nilai) {
                $this->ttl_sks += $nilai['sks'];
                $this->ttl_bobot += $nilai['sks'] * $this->bobot[$nilai['nilai']];
            }
            $this->ipk = round($this->ttl_bobot / $this->ttl_sks, 2);
        }
        return $this->ipk;
    }

    public function getData()
    {
        return array_merge(parent::getData(), [
            'daftar_nilai' => $this->daftar_nilai,
            'ipk' => $this->ipk
        ]);
    }
}