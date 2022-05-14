<?php
$dosa = ["amarah", "sombong", "malas", "serakah", "rakus", "iri"];

echo "dosa : ";
for ($i=0; &i<=5; $i++){
    echo $dosa[$i]. ", ";
}

echo "<br>Mari kita hapus dosa tersebut <br>";
for ($i=0; &i<=3; $i++){
    unset($dosa[$i]);
}

if(empty($dosa)){
    echo "Dosa sudah berhasil dihapus <br>";
}

echo "Minnal Aidin Walfaidzin, dari Dayu dan keluarga";
?>
