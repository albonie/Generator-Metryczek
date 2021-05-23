<?php
include 'styl.php';


function konurencja($nazwa, $wlasna, $klubowa) : string {
    return "
    <tr>
        <td>$nazwa</td>
        <td id='bron'>
            <table id='zaznaczanie'>
                <tr>
                    <td id='lewy'>$wlasna</td>
                    <td id='prawy'>$klubowa</td>
                </tr>
            </table>
        </td>
        <td></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td class='strzaly'></td>
        <td></td>
        <td></td>
    </tr>
    ";
}

function dynamiczna(string $imie, string $nazwisko, string $klub, 
int $nr, $data,  string ...$vararg) : string {
    
    $zwrot = "
    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Metryczka</title>
    
</head>

"
.
styl()
.
"

<body>
    
    <div id='ramka'>

        
        <table style='overflow: wrap' autosize='0'>
            <tr>
                <td id='numer'><strong>$nr</strong></td>
                <td id='tytul' class='bezramek' colspan='3'><h2>KSS LOK REGALICA GRYFINO</h2></td>
            </tr>
            <tr>
                
                
                <td class='bezramek'><strong>IMIĘ</strong></td>
                <td class='dane1tab'>$imie</td>
            </tr>

            <tr>
                
                <td class='bezramek'><strong>NAZWISKO</strong></td>
                <td class='dane1tab'>$nazwisko</td>
            </tr>
        </table>

        <table>
            <tr class='margtop'></tr>
            <tr>
                <td class='bezramek'><strong>Klub</strong></td>
                <td class='dane0tab'>$klub</td>
                <td id='odstep1'></td>
                <td class='bezramek'><strong>Data</strong></td>
                <td class='dane2tab'>$data</td>
            </tr>
            <tr class='margtop'></tr>
        </table>

        <table id='duzytab'>
            <tr>
                <td>Konkurencja</td>
                
                <td id='broniammo'>
                    <table id='brontab'>
                        <tr>
                            <td id='gora' colspan='2'>Broń i amunicja</td>
                        </tr>
                        <tr>
                            <td id='dol1'>Własna</td>
                            <td id='dol2'>Klubowa</td>
                        </tr>
                    </table>
                    </div>

                </td>
                <td>Stanowisko</td>
                <td class='strzaly'>1</td>
                <td class='strzaly'>2</td>
                <td class='strzaly'>3</td>
                <td class='strzaly'>4</td>
                <td class='strzaly'>5</td>
                <td class='strzaly'>6</td>
                <td class='strzaly'>7</td>
                <td class='strzaly'>8</td>
                <td class='strzaly'>9</td>
                <td class='strzaly'>10</td>
                <td id='wynik'>Wynik</td>
                <td class='strzaly'>10X</td>
                <td id='uwagi'>Uwagi</td>
            </tr>

        ";
        for ($i = 0; $i < sizeof($vararg)-1; $i += 3) {
            $zwrot .= konurencja($vararg[$i], $vararg[$i+1], $vararg[$i+2]);    
        }
        
        $zwrot .=
        "

        </table>

        <table>
            <tr class='margtop'></tr>
            <tr>
                <td class='bezramek'>Podpis zawodnika</td>
                <td class='dane2tab'></td>
                <td id='odstep2'></td>
                <td class='bezramek'>Podpis sędziego</td>
                <td class='dane2tab'></td>
            </tr>
          
        </table>

        <table>
            <tr>
                <td class='bezramek'></td>
                <td class='bezramek' rowspan='3' id='rodoTekst'>Po zapoznaniu się z regulaminem zawodów wyrażam zgodę na przetwarzanie moich danych osobowych podanych przeze mnie zgodnie <br>
                    z art. 6 ust. 1 lit. a. Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób <br>
                     fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych w związku z udziałem w zawodach.</td>
            </tr>
            <tr>        
                <td id='rodo'>X</td>
            </tr>
            <tr>
                <td class='bezramek'></td>
            </tr>
        </table>

    </div>
   
</body>
</html>
    ";

    return $zwrot;
}
?>