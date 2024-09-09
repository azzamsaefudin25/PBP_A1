<?php
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(78, 60, 64),
    'Nina' => array(67, 56, 84),
    'Budi' => array(87, 69, 50),
    'Budi' => array(98, 65, 74)
);

function hitung_rata($array){
    $total_nilai = 0;
    $banyak_elemen = count($array);

    foreach ($array as $nilai) {
        $total_nilai += $nilai;
    }

    return $total_nilai / $banyak_elemen;
}

function print_mhs($array_mhs){
    echo "<table border = '1' >";
    echo "<tr><th>Nama</th><th>Nilai1</th><th>Nilai2</th><th>Nilai3</th><th>Rata2</th>";

    foreach ($array_mhs as $nama => $nilai) {
        $rata_rata = hitung_rata($nilai);
        echo "<tr>";
        echo "<td>".$nama. "</td>";
        foreach ($nilai as $n){
            echo "<td>" . $n . "</td>";
        }
        
        echo "<td>" . $rata_rata . "</td>";
        echo "</tr>";
    }
    echo "</table>";

}

print_mhs($array_mhs)
?>