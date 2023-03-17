
<?php
//variabel
//variabel string
$namadepan = 'maikel';
$namabelakan= "Kayame";

echo $namadepan.$namabelakan;

echo $namalengkap = $namadepan.''.$namabelakan;

// variabel integer

$x=10;
$y=70;

$penjumlahan = $x + $y;
echo '<p>'.$penjumlahan.'</p>';

// variabel pengurangan

$pengurangan = $x - $y;
echo '<p>'.$pengurangan.'</p>';

// variabel perkalian 
$perkalian = $x * $y;
echo '<p>'.$perkalian.'</p>';

// variabel pembagian
$pembagian = $x / $y ;
echo '<p>'.$pembagian.'</p>';

// variabel pembagian
$sisabagi = $x % $y;
echo '<p>'.$sisabagi.'</p>';


// operator percabangan  atau IF ElSE

$nilai = 99;
// perbandingkan untuk kondisi <, >, =, !=, ==, ===,
// or = ||
//  = &&
//  not = !=

// 90=A, 80=B, 70=C, 60=D, E
if ( 90 <=  $nilai)
{
    echo '<p> selamat '. $namalengkap .'</p>';
    echo '<p> anda mendapatkan nilai A </p>';

}else if(80 <= $nilai){
    echo '<p> selamat '. $namalengkap .'</p>';
    echo '<p> anda mendapatkan nilai B </p>';
}

else if(70 <= $nilai){
    echo '<p> selamat '. $namalengkap .'</p>';
    echo '<p> anda mendapatkan nilai C </p>';
}

else if(60 <= $nilai){
    echo '<p> selamat '. $namalengkap .'</p>';
    echo '<p> anda mendapatkan nilai D </p>';
}

else {
    echo '<p> selamat '. $namalengkap .'</p>';
    echo '<p> anda mendapatkan nilai E </p>';
}


// pengulangan

// for
// while
// foreach
echo "<h1> Bilangan ganjil <h1>";
for ($i=0; $i <= 100; $i++) {
  
   if ($i % 2 !== 0)
   {
   echo $i.',';
}

}

echo "<br> <h1>Bilangan Genap</h1>";

for ($i=0; $i <= 100; $i++){
    if ($i % 2 == 0){
        echo $i.',';
    }
}




?>