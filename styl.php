<?php
function styl() : string {
    return "
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
                position: relative;
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
    ";
}
?>