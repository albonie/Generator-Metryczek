<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExcelToPhp</title>
</head>

<?php

require_once 'src/SimpleXLSX.php';

if ( $xlsx = SimpleXLSX::parse('Zawody.xlsx')) 
{
 $dim = $xlsx->dimension(0);
 echo '<h2>'.$xlsx->sheetName(0).'</h2>';
 
 foreach ( $xlsx->rows() as $r ) 
 {
    
     $i = 2;
     
         $imie=( ! empty( $r[ $i ] ) ? $r[ $i ] : ' ');
         echo $imie."<br>";
         $i++;

         $nazwisko=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $nazwisko."<br>";
         $i++;

         $klub=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $klub."<br>";
         $i++;

         $kc=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $kc."<br>";
         $i++;

         $kco=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $kco."<br>";
         $i++;

         $ss=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $ss."<br>";
         $i++;

         $so=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $so."<br>";
         $i++;

         $kb=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $kb."<br>";
         $i++;

         $pb=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo $pb."<br>";
         $i++;

         $pc=( ! empty( $r[ $i] ) ? $r[ $i] : ' ');
         echo  $pc."<br>";
         echo "<br>";


         
     }
     
 }


?>

</html>