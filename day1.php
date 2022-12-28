<?php 
echo "Program_GanjilGenab";

$number = 1;

if($number % 2 == 0){
    echo "ganjil";
}else {
    echo "genap";
}

?>

<?php
/*program hitung luas segitiga*/
// DEKLARASI
// VARIABEL a dan t tipe data>>>
// VARIABEL HASIL
// ALGORITMA 
// NILAI MASUK (a,t)
// HASIL = 1/2 * a * t
// NILAI KELUAR ('LUAS SEGITIGA: hasil')  
// Pseucode


$a = 6;
$t = 20;

$hasil =(int)(1/2 * $a * $t);

echo "luas Segitga: ".$hasil;
?>
<?php
// Menghitung Volume Balok
// variabel p,l,t int
// var hasil String;
// input(p,l,t)
// output : volume balok :
// p x l x t


$p = 82;
$l = 46;
$t = 18;

$hasil =(int)($p * $l * $t);
echo 'Volume Balok: '.PHP_EOL.$hasil;
echo "Balok :",$p,"x",$l,"x",$t;
?> 