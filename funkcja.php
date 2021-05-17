<?php
//$imie, $nazwisko, $klub, $ksp, $kcz, $kczOP, $psp, $pcz, $strzelbaST, $strzelbaOPEN
function pies() : string {
    return "
    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Metryczka</title>
    
</head>

<style>
@page{
margin: 0;
margin-top: 5px;
}
    td {
        border: 1px solid black;
    }
    #ramka{
        height: 90mm;
        width: 183mm;
        border: 2px solid black;
        padding-left: 2mm;
        padding-right: 0mm;
        margin: auto;
    }

    .dane1tab{
        width: 152.5mm;
        height: 4mm;
    }

    #numer{
        width: 14mm;
        height: 14mm;
        text-align: center;
    }

    .strzaly, div{
        width: 6mm;
        height: 6mm;
        text-align: center;
        font-size: 3mm;
    }

    #uwagi{
        width: 26mm;
        text-align: center;
    }

    #odstep1{
        width: 40mm;
        border: none;
    }

    .dane2tab{
        width: 43mm;
        height: 4mm;
    }

    .dane0tab{
        width: 73mm;
        height: 4mm;
    }

    #broniammo{
        width: 18mm; 
        text-align: center;
        padding: 0;
        box-sizing: border-box;
    }

    
    #odstep2{
        width: 20mm;
        border: none;
    }

    #rodo{
        width: 3mm;
        height: 3mm;
    }

    .bezramek{
        border:none;
        font-size: 2mm;
        text-align: left;
    }

    .margtop{
        border: none;
        height: 2mm;
    }

    #duzytab{
        border-collapse: collapse;
        width: 170mm;
        height: 36mm;
    }
    
    table{
        margin-top: 1mm;
    }

    #wynik{
        width: 18mm;
        text-align: center;
    }


    h2{
        text-align: center;
    }

    #bron {
        width: 18mm; 
        text-align: center;
        padding: 0;
        box-sizing: border-box;
    }
    
    #tytul {
        text-align: center;
    }

    #rodoTekst {
        padding-left: 2mm;
        box-sizing: border-box;
        font-size: 2.5mm;
    }

    body{
        font-size: xx-small;
    }
    #brontab {
        margin-top: 0;
        border: 0;
        border-collapse: collapse;
        height: 8mm;
        width: 18mm;    
        table-layout: fixed;
    }
    #gora {
        height: 4mm;
        width: 18mm;
        border-left: none;
        border-right: none;
        border-top: none;
        font-size: x-small;
    }
    #dol1 {
        border-left: none;
    }
    #dol2 {
        border-right: none;
    }
    #dol1, #dol2 {
        width: 9mm;
        height: 4mm;
        border-bottom: none;
        box-sizing: border-box;
        font-size: 2mm;
        padding: 0;
    }
    #zaznaczanie {
        margin: 0;
        border: 0;
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
    }
    #lewy, #prawy {
        width: 9mm;
        height: 7mm;
        border-top: none;
        border-bottom: none;
        box-sizing: border-box;
        padding: 0;
    }
    #lewy {
        border-left: none;
    }
    #prawy {
        border-right: none;
    }

</style>


<body>
    
    <div id='ramka'>

        
        <table >
            <tr>
                <td id='numer'>000</td>
                <td id='tytul' class='bezramek' colspan='3'><h2>KSS LOK REGALICA GRYFINO</h2></td>
            </tr>
            <tr>
                
                
                <td class='bezramek'>IMIE</td>
                <td class='dane1tab'></td>
            </tr>

            <tr>
                
                <td class='bezramek'>NAZWISKO</td>
                <td class='dane1tab'></td>
            </tr>
        </table>

        <table>
            <tr class='margtop'></tr>
            <tr>
                <td class='bezramek'>Klub</td>
                <td class='dane0tab'></td>
                <td id='odstep1'></td>
                <td class='bezramek'>Data</td>
                <td class='dane2tab'></td>
            </tr>
            <tr class='margtop'></tr>
        </table>

        <table id='duzytab'>
            <tr>
                <td>Konkurencja</td>
                
                <td id='broniammo'>
                    <table id='brontab'>
                        <tr>
                            <td id='gora' colspan='2'>Broń</td>
                        </tr>
                        <tr>
                            <td id='dol1'>Własna</td>
                            <td id='dol2'>Klubowa</td>
                        </tr>
                    </table>
                    </div>

                </td>
                <td id='broniammo'>
                    <table id='brontab'>
                        <tr>
                            <td id='gora' colspan='2'>Amunicja</td>
                        </tr>
                        <tr>
                            <td id='dol1'>Własna</td>
                            <td id='dol2'>Klubowa</td>
                        </tr>
                    </table>
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

            <tr>
                <td></td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
                        </tr>
                    </table>
                </td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
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
                <td rowspan='4'></td>
               
            </tr>

            <tr>
                <td></td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
                        </tr>
                    </table>
                </td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
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
            </tr>

            <tr>
                <td></td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
                        </tr>
                    </table>
                </td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
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
            </tr>

            <tr>
                <td></td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
                        </tr>
                    </table>
                </td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'></td>
                            <td id='prawy'></td>
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
            </tr>
        </table>

        <table >
            <tr class='margtop'></tr>
            <tr>
                <td class='bezramek'>Podpis zawodnika</td>
                <td class='dane2tab'></td>
                <td id='odstep2'></td>
                <td class='bezramek'>Podpis sędziego</td>
                <td class='dane2tab'></td>
            </tr>
          
        </table>

        <table >
            <tr>
                <td class='bezramek'></td>
                <td class='bezramek' rowspan='3' id='rodoTekst'>Po zapoznaniu się z regulaminem zawodów wyrażam zgodę na przetwarzanie moich danych osobowych podanych przeze mnie zgodnie <br>
                    z art. 6 ust. 1 lit. a. Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób <br>
                     fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych w związku z udziałem w zawodach.</td>
            </tr>
            <tr>        
                <td id='rodo'></td>
            </tr>
            <tr>
                <td class='bezramek'></td>
            </tr>
        </table>

    </div>
   
</body>
</html>
    ";
}
?>