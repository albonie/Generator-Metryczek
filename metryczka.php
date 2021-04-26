<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metryczka</title>
</head>
<?php
//error_reporting(0);

static $numer = 0;

if (isset($_POST)) {
    if (isset($_POST["rodo"])) {
        $dane = $_POST["dane"];
        $imie = explode(" ", $dane);
        $klub = $_POST["klub"];
        $konkurencje = [];
        if (isset($_POST["ksp"])) {
            array_push($konkurencje, "Ksp");
        }
        if (isset($_POST["kcz"])) {
            array($konkurencje, "Kcz");
        }
        if (isset($_POST["kczOP"])) {
            array_push($konkurencje, "Kcz OPEN");
        }
        if (isset($_POST["optyka"])) {
           array_push($konkurencje, "Optyka");
        }
        if (isset($_POST["psp"])) {
            array_push($konkurencje, "Psp");
        }
        if (isset($_POST["pcz"])) {
            array_push($konkurencje, "Pcz");
        }
        if (isset($_POST["strzOP"])) {
            array_push($konkurencje, "Strzelba OPEN");
        }
        if (isset($_POST["strzST"])) {
            array_push($konkurencje, "Strzelba STANDARD");
        }
        $zaznaczone = sizeof($konkurencje);
    }
    else {
        header("Location: form.html");
    }
}

function printKomorka($znak) {
    echo "
    <td id='bron'>
                    <div id='polowa1'>$znak</div>
                    <div id='polowa2'>$znak</div>
                </td>
                <td id='bron'>
                    <div id='polowa1'>$znak</div>
                    <div id='polowa2'>$znak</div>
                </td>
                <td class='konk'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='strzaly'>$znak</td>
                <td class='konk'>$znak</td>
                
    ";
}
?>
<style>
    td {
        border: 1px solid black;
    }
    #ramka{
        height: 550px;
        width:1000px;
        border: 2px solid black;
        padding-left: 10px;
        margin: auto;
    }

    .dane1tab{
        width: 879px;
        height: 30px;
        box-sizing: border-box;
        padding-left: 15px;
    }

    #numer{
        width: 80px;
        height: 80px;
        text-align: center;
    }

    .strzaly{
        width: 30px;
        height: 30px;
        text-align: center;
    }

    #uwagi{
        width: 142px;
        text-align: center;
    }

    #odstep1{
        width: 225px;
        border: none;
    }

    .dane2tab{
        width:263px;
        height: 25px;
        box-sizing: border-box;
        padding-left: 15px;
    }

    .dane0tab{
        width:400px;
        height: 25px;
        box-sizing: border-box;
        padding-left: 15px;
    }

    #broniammo{
        width: 100px; 
        text-align: center;
        padding: 0;
        box-sizing: border-box;
    }

    .dane3tab{
        width:300px;
    }

    #odstep2{
        width: 137px;
        border: none;
    }

    #rodo{
        width:15px;
        height: 15px;
    }

    .bezramek{
        border:none;
    }

    #odstep0{
        width: 20px;
        border: none;
    }

    .margtop{
        border: none;
        height: 10px;
    }

    #duzytab{
        border-collapse: collapse;
    }
    
    table{
        margin-top: 5px;
    }

    #wynik{
        width: 100px;
        text-align: center;
    }


    h2{
        text-align: center;
    }

    .div {
        width: 100%;
        height: 20px;
        margin: 0;
        box-sizing:border-box;
    }

    #div2, #div3 {
        width: 50%;
        height: 100%;
        font-size: xx-small;
        border-top: 1px solid black;
        padding-top: 4%;
    }
    #div2 {
        float: left;
        border-right: 1px solid black;
        box-sizing:border-box;
    }
    #div3 {
        float: right;
        box-sizing:border-box;
    }

    #polowa1, #polowa2 {
        height:40px;
        width: 50%;
        box-sizing: border-box;
        text-align: center;
    }
    #polowa1 {
        border-right: 1px solid black;
        float: left;
    }
    #polowa2 {
        float: right;
    }
    #bron {
        padding: 0;
        box-sizing: border-box;
    }
    
    #tytul {
        text-align: center;
    }

    #rodoTekst {
        padding-left: 10px;
        box-sizing: border-box;
    }

    .konk {
        text-align: center;
    }

</style>


<body>
    
    <div id="ramka">

        
        <table >
            <tr>
                <td id="numer">
                    <?php
                        echo ++$numer;
                    ?>
                </td>
                <td id="tytul" class="bezramek" colspan="3"><h2>KSS LOK REGALICA GRYFINO</h2></td>
            </tr>
            <tr>
                
                
                <td class="bezramek">IMIE</td>
                <td class="dane1tab">
                <?php
                    echo $imie[0];
                ?>
                </td>
            </tr>

            <tr>
                
                <td class="bezramek">NAZWISKO</td>
                <td class="dane1tab">
                    <?php
                        echo $imie[1];
                    ?>
                </td>
            </tr>
        </table>

        <table>
            <tr class="margtop"></tr>
            <tr>
                <td class="bezramek">Klub</td>
                <td class="dane0tab">
                    <?php
                        echo $klub;
                    ?>
                </td>
                <td id="odstep1"></td>
                <td class="bezramek">Data</td>
                <td class="dane2tab">
                    <?php
                        echo date("d.m.20y");
                    ?>
                </td>
            </tr>
            <tr class="margtop"></tr>
        </table>

        <table id="duzytab">
            <tr>
                <td>Konkurencja</td>
                
                <td id="broniammo">
                    <div class="div">Broń</div>

                    <div class="div">
                        <div id="div2">Własna</div>
                        <div id="div3">Klubowa</div>
                    </div>

                </td>
                <td id="broniammo">
                    <div class="div">Amunicja</div>

                    <div class="div">
                        <div id="div2">Własna</div>
                        <div id="div3">Klubowa</div>
                    </div>
                </td>
                <td>Stanowisko</td>
                <td class="strzaly">1</td>
                <td class="strzaly">2</td>
                <td class="strzaly">3</td>
                <td class="strzaly">4</td>
                <td class="strzaly">5</td>
                <td class="strzaly">6</td>
                <td class="strzaly">7</td>
                <td class="strzaly">8</td>
                <td class="strzaly">9</td>
                <td class="strzaly">10</td>
                <td id="wynik">Wynik</td>
                <td class="strzaly">10X</td>
                <td id="uwagi">Uwagi</td>
            </tr>

            <tr>        
                    <?php
                    if ($zaznaczone >= 1) {
                        echo "<td class = 'konk'>$konkurencje[0]</td>";
                        printKomorka("");
                    }
                    else {
                        echo "<td class='konk'></td>";
                        printKomorka("-");
                        
                    }
                    ?>
                    <td rowspan='4'></td>             
            </tr>

            <tr>
            <?php
                    if ($zaznaczone >= 2) {
                        echo "<td class = 'konk'>$konkurencje[1]</td>";
                        printKomorka("");
                    }
                    else {
                        echo "<td class='konk'></td>";
                        printKomorka("-");
                    }
                    ?>            
            </tr>

            <tr>
            <?php
                    if ($zaznaczone >= 3) {
                        echo "<td class = 'konk'>$konkurencje[2]</td>";
                        printKomorka("");
                    }
                    else {
                        echo "<td class='konk'></td>";
                        printKomorka("-");
                    }
                    ?>
               

            <tr>
            <?php
                    if ($zaznaczone >= 4) {
                        echo "<td class = 'konk'>$konkurencje[3]</td>";
                        printKomorka("");
                    }
                    else {
                        echo "<td class='konk'></td>";
                        printKomorka("-");
                    }
                    ?>
            </tr>
        </table>

        <table >
            <tr class="margtop"></tr>
            <tr>
                <td class="bezramek">Podpis zawodnika</td>
                <td class="dane2tab"></td>
                <td id="odstep2"></td>
                <td class="bezramek">Podpis sędziego</td>
                <td class="dane2tab"></td>
            </tr>
            <tr class="margtop"></tr>
        </table>

        <table >
            <tr>
                <td class="bezramek"></td>
                <td class="bezramek" rowspan="3" id="rodoTekst">Po zapoznaniu się z regulaminem zawodów wyrażam zgodę na przetwarzanie moich danych osobowych podanych przeze mnie zgodnie <br>
                    z art. 6 ust. 1 lit. a. Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób <br>
                     fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych w związku z udziałem w zawodach.</td>
            </tr>
            <tr>        
                <td id="rodo"></td>
            </tr>
            <tr>
                <td class="bezramek"></td>
            </tr>
        </table>

    </div>
   
</body>
</html>

