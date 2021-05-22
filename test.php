<?php
include 'funkcja.php';
require_once 'src/SimpleXLSX.php';
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();



if ( $xlsx = SimpleXLSX::parse('Zawody.xlsx')) {
    $dim = $xlsx->dimension(0);
    foreach ( $xlsx->rows() as $j=>$r ) {

        $i = 3;
        if ($j == 0 ) {
            continue;
        }
        
            $imie=( ! empty( $r[ $i ] ) ? $r[ $i ] : '-');
            $i++;

            $nazwisko=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
            $i++;

            $klub=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
            $i++;

            $kc=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                $i++;
                if ($kc != "Nie") {
                    if ($kc == "Tak, broń i amunicja własna") {
                        $kcW = "X";
                        $kcK = " ";
                    }
                    else {
                        $kcW = " ";
                        $kcK = "X";
                    }
                    $kc = "Kcz";
                }
                else {
                    $kc = " ";
                    $kcW = " ";
                    $kcK = " ";
                }

            $kco=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                $i++;
                if ($kco != "Nie") {
                    if ($kco == "Tak, broń i amunicja własna") {
                        $kcoW = "X";
                        $kcoK = " ";
                    }
                    else {
                        $kcoW = " ";
                        $kcoK = "X";
                    }
                    $kco = "Kcz OPEN";
                }
                else {
                    $kco = " ";
                    $kcoW = " ";
                    $kcoK = " ";
                }

            $ss=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                $i++;
                if ($ss != "Nie") {
                    if ($ss == "Tak, broń i amunicja własna") {
                        $ssW = "X";
                        $ssK = " ";
                    }
                    else {
                        $ssW = " ";
                        $ssK = "X";
                    }
                    $ss = "Strzelba STANDARD";
                }
                else {
                    $ss = " ";
                    $ssW = " ";
                    $ssK = " ";
                }

            $so=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                $i++;
                if ($so != "Nie") {
                    if ($so == "Tak, broń i amunicja własna") {
                        $soW = "X";
                        $soK = " ";
                    }
                    else {
                        $soW = " ";
                        $soK = "X";
                    }
                    $so = "Strzelba OPEN";
                }
                else {
                    $so = " ";
                    $soW = " ";
                    $soK = " ";
                }

            $kb=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                $i++;
                if ($kb != "Nie") {
                    if ($kb == "Tak, broń i amunicja własna") {
                        $kbW = "X";
                        $kbK = " ";
                    }
                    else {
                        $kbW = " ";
                        $kbK = "X";
                    }
                    $kb = "Ksp";
                }
                else {
                    $kb = " ";
                    $kbW = " ";
                    $kbK = " ";
                }

            $pb=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                $i++;
                if ($pb != "Nie") {
                    if ($pb == "Tak, broń i amunicja własna") {
                        $pbW = "X";
                        $pbK = " ";
                    }
                    else {
                        $pbW = " ";
                        $pbK = "X";
                    }
                    $pb = "Psp";
                }
                else {
                    $pb = " ";
                    $pbW = " ";
                    $pbK = " ";
                }

            $pc=( ! empty( $r[ $i] ) ? $r[ $i] : '-');
                if ($pc != "Nie") {
                    if ($pc == "Tak, broń i amunicja własna") {
                        $pcW = "X";
                        $pcK = " ";
                    }
                    else {
                        $pcW = " ";
                        $pcK = "X";
                    }
                    $pc = "Pcz";
                }
                else {
                    $pc = " ";
                    $pcW = " ";
                    $pcK = " ";
                }
            
            $mpdf->shrink_tables_to_fit=1;
            
            if ($j + 1 % 2 == 0) {
            $mpdf->AddPage();
            }
            
            
            if ($kb != " " || $kc != " " || $kco != " ") {
                $mpdf->WriteHTML(pies($nazwisko, $imie, $klub, $kb, $kbW, $kbK, $kc, $kcW, $kcK,  $kco, $kcoW, $kcoK, null, null, null, $j));
                $mpdf->WriteHTML("<hr><br><br>");
            }
            
            if ($pb != " " || $pc != " " || $ss != " " || $so != " ") {
                $mpdf->WriteHTML(pies($nazwisko, $imie, $klub, $pb, $pbW, $pbK, $pc, $pcW, $pcK, $ss, $ssW, $ssK, $so, $soW, $soK, $j));
                $mpdf->WriteHTML("<hr><br><br>");
            }
        }
}
$mpdf->Output();
?>