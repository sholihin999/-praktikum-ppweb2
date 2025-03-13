<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

// MENGHITUNG NILAI PRESENTASE NILAI SISWA UNTUK LULUS  
// KRITERIA : NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan TUGAS 35% melebihi 55

$nilai_akhir = (30 / 100 * $nilai_uts + 35 / 100 * $nilai_uas + 35 / 100 * $nilai_tugas);

if ($nilai_akhir > 55) { #jika nilai akhir lebih dari 55 maka status lulus
    $status = "lulus";
} else { #jika nilai akhir kurang dari 55 maka status tidak lulus
    $status = "Tidak lulus";
} 

// MENGHITUNG GRADE SISWA BERDASARKAN NILAI AKHIR DENGAN IF ELSE
if ($nilai_akhir >= 0 && $nilai_akhir <= 35) { #jika nilai akhir lebih dari 0 dan kurang dari 35 maka grade E
    $grade = 'E';
} elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) { #jika nilai akhir lebih dari 36 dan kurang dari 55 maka grade D
    $grade = 'D';
} elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) { #jika nilai akhir lebih dari 56 dan kurang dari 69 maka grade C
    $grade = 'C';
} elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) { #jika nilai akhir lebih dari 70 dan kurang dari 84 maka grade B
    $grade = 'B';
} elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100) { #jika nilai akhir lebih dari 85 dan kurang dari 100 maka grade A
    $grade = 'A';
} else { #jika nilai akhir tidak sesuai dengan kriteria diatas maka grade I
    $grade = 'I';
}

// MENGHITUNG PREDIKAT SISWA BERDASARKAN GRADE DENGAN SWITCH CASE
/* 
    Jika grade E maka predikat Sangat Kurang
    Jika grade D maka predikat Kurang
    Jika grade C maka predikat Cukup
    Jika grade B maka predikat Memuaskan
    Jika grade A maka predikat Sangat Memuaskan
    Jika grade I maka predikat Tidak ada
*/

switch ($grade) {
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;
    case 'I':
        $predikat = 'Tidak ada';
        break;
}
// MENCETAK HASIL FORM NILAI
if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Akhir : ' . $nilai_akhir;
    echo '<br/>Status : ' . $status;
    echo '<br/>Grade : ' . $grade;
    echo '<br/>Predikat : ' . $predikat;
}
