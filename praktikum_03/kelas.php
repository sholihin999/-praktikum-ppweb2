<?php

class Mahasiswa {
    private $nama;
    private $nim;
    private $semester;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setSemester($semester) {
        $this->semester = $semester;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getSemester() {
        return $this->semester;
    }
}

$budi = new Mahasiswa;
$budi->setNama('Budi Darsono');
$budi->setNim('0110217043');
$budi->setSemester('4');

$siti = new Mahasiswa;
$siti->setNama('Siti Nurjanah');
$siti->setNim('0110217044');
$siti->setSemester('4');

echo $budi->getNama() . "<br>";
echo $budi->getNim() ." <br>"; 
echo $budi->getSemester() > "<br>";

echo $siti->getNama() ." <br>";
echo $siti->getNim() ." <br>";
echo $siti->getSemester() . "<br>";

?>