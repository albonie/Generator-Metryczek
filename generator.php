<?php
include 'metryczkaDynamiczna.php';
require_once 'src/SimpleXLSX.php';
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
echo $_POST["pole1"];
echo $_POST["pole2"];
if (isset($_POST["pole1"]) && isset($_POST["pole2"]) && isset($_FILES["upload"])){

        $data1 = $_POST["pole1"];
        $data2 = $_POST["pole2"];

        if (move_uploaded_file($_FILES["upload"]["tmp_name"], "./pliki/Zawody.xlsx")){
        if ( $xlsx = SimpleXLSX::parse('Zawody.xlsx')) {
            $dim = $xlsx->dimension(0);
            foreach ( $xlsx->rows() as $j=>$r ) {

                $i = 3;
                if ($j == 0) {
                    continue;
                }
                
                    $nazwisko=( ! empty( $r[ $i ] ) ? $r[ $i ] : '-');      //  KOLUMNA D
                    $i++;

                    $imie=( ! empty( $r[ $i] ) ? $r[ $i] : '-');            //  KOLUMNA E
                    $i++;

                    $klub=( ! empty( $r[ $i] ) ? $r[ $i] : '-');            //  KOLUMNA F
                    $i++;

                    $kc=( ! empty( $r[ $i] ) ? $r[ $i] : '-');              //  KOLUMNA G
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

                    $kco=( ! empty( $r[ $i] ) ? $r[ $i] : '-');             //  KOLUMNA H
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

                    $ss=( ! empty( $r[ $i] ) ? $r[ $i] : '-');              //  KOLUMNA I
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

                    $so=( ! empty( $r[ $i] ) ? $r[ $i] : '-');              //  KOLUMNA J
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

                    $kb=( ! empty( $r[ $i] ) ? $r[ $i] : '-');              //  KOLUMNA K
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

                    $pb=( ! empty( $r[ $i] ) ? $r[ $i] : '-');              //  KOLUMNA L
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

                    $pc=( ! empty( $r[ $i] ) ? $r[ $i] : '-');              //  KOLUMNA M
                        $i++;    
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

                    $optyka=( ! empty( $r[ $i] ) ? $r[ $i] : '-');          //  KOLUMNA N
                        if ($optyka != "Nie") {
                            if ($optyka == "Tak, broń i amunicja własna") {
                                $optykaW = "X";
                                $optykaK = " ";
                            }
                            else {
                                $optykaW = " ";
                                $optykaK = "X";
                            }
                            $optyka = "Optyka";
                        }
                        else {
                            $optyka = " ";
                            $optykaW = " ";
                            $optykaK = " ";
                        }
                    
                    $mpdf->shrink_tables_to_fit=1;
                    
                    if ($j + 1 % 2 == 0) {
                        $mpdf->AddPage();
                    }
                    
                    if ($kc != " " || $kco != " " || $optyka != " " || $ss != " " || $so != " ") {
                        $mpdf->WriteHTML(dynamiczna($imie, $nazwisko, $klub, $j, $data1, 
                        $kc, $kcW, $kcK, 
                        $kco, $kcoW, $kcoK, 
                        $ss, $ssW, $ssK, 
                        $so, $soW, $soK, 
                        $optyka, $optykaW, $optykaK));
                        $mpdf->WriteHTML("<hr><br><br>");
                    }
                    
                    if ($pb != " " || $pc != " " || $kb != " ") {
                        $mpdf->WriteHTML(dynamiczna($imie, $nazwisko, $klub, $j, $data2,
                        $kb, $kbW, $kbK,
                        " ", " ", " ", 
                        $pb, $pbW, $pbK,
                        " ", " ", " ", 
                        $pb, $pcW, $pcK));
                        $mpdf->WriteHTML("<hr><br><br>");
                    } 
            }
        }
        $mpdf->Output();
    }
}
else {
    echo "Data nie została wpisana lub plik nie został wysłany<br>
    <a href='form.html'>Wróć</a>
    ";
}
?>