<?php

function pies($imie, $nazwisko, $klub, $konk1, $konk1W, $konk1K, $konk2, $konk2W, $konk2K, $konk3, $konk3W, $konk3K, $konk4, $konk4W, $konk4K, $nr) : string {
    
    $data = date('d.m.20y');
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
        margin-top: 55px;
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
                margin-bottom: 0;
            }

            .dane1tab{
                width: 152.5mm;
                height: 10mm;
                padding-left: 3mm;
                font-size: 15pt;
            }

            #numer{
                width: 20mm;
                height: 14mm;
                text-align: center;
                font-size: 20pt;
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
                height: 10mm;
                padding-left: 3mm;
                font-size: 15pt;
            }

            .dane0tab{
                width: 73mm;
                height: 10mm;
                padding-left: 3mm;
                font-size: 15pt;
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
                font-size: 9pt;
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
                font-size: 10pt;
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
                font-size: 6pt;
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
                height: 9mm;
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
            .konkurencja {
                text-align: 0;
            }

</style>


<body>
    
    <div id='ramka'>

        
        <table style='overflow: wrap' autosize='0'>
            <tr>
                <td id='numer'><strong>$nr</strong></td>
                <td id='tytul' class='bezramek' colspan='3'><h2>KSS LOK REGALICA GRYFINO</h2></td>
            </tr>
            <tr>
                
                
                <td class='bezramek'><strong>IMI??</strong></td>
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
                            <td id='gora' colspan='2'>Bro?? i amunicja</td>
                        </tr>
                        <tr>
                            <td id='dol1'>W??asna</td>
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

            <tr>
                <td class='konkurencja'>$konk1</td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'>$konk1W</td>
                            <td id='prawy'>$konk1K</td>
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

            <tr>
                <td class='konkurencja'>$konk2</td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'>$konk2W</td>
                            <td id='prawy'>$konk2K</td>
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

            <tr>
                <td class='konkurencja'>$konk3</td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'>$konk3W</td>
                            <td id='prawy'>$konk3K</td>
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

            <tr>
                <td class='konkurencja'>$konk4</td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'>$konk4W</td>
                            <td id='prawy'>$konk4K</td>
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

            <tr>
                <td class='konkurencja'>$konk4</td>
                <td id='bron'>
                    <table id='zaznaczanie'>
                        <tr>
                            <td id='lewy'>$konk4W</td>
                            <td id='prawy'>$konk4K</td>
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
        </table>

        <table >
            <tr class='margtop'></tr>
            <tr>
                <td class='bezramek'>Podpis zawodnika</td>
                <td class='dane2tab'></td>
                <td id='odstep2'></td>
                <td class='bezramek'>Podpis s??dziego</td>
                <td class='dane2tab'></td>
            </tr>
          
        </table>

        <table >
            <tr>
                <td class='bezramek'></td>
                <td class='bezramek' rowspan='3' id='rodoTekst'>Po zapoznaniu si?? z regulaminem zawod??w wyra??am zgod?? na przetwarzanie moich danych osobowych podanych przeze mnie zgodnie <br>
                    z art. 6 ust. 1 lit. a. Rozporz??dzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony os??b <br>
                     fizycznych w zwi??zku z przetwarzaniem danych osobowych i w sprawie swobodnego przep??ywu takich danych w zwi??zku z udzia??em w zawodach.</td>
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